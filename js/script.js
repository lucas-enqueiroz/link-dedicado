const labels = document.querySelectorAll(".accordion-item__label");
const tabs = document.querySelectorAll(".accordion-tab");

function toggleShow() {
	const target = this;
	const item = target.classList.contains("accordion-tab")
		? target
		: target.parentElement;
	const group = item.dataset.actabGroup;
	const id = item.dataset.actabId;

	tabs.forEach(function(tab) {
		if (tab.dataset.actabGroup === group) {
			if (tab.dataset.actabId === id) {
				tab.classList.add("accordion-active");
			} else {
				tab.classList.remove("accordion-active");
			}
		}
	});

	labels.forEach(function(label) {
		const tabItem = label.parentElement;

		if (tabItem.dataset.actabGroup === group) {
			if (tabItem.dataset.actabId === id) {
				tabItem.classList.add("accordion-active");
			} else {
				tabItem.classList.remove("accordion-active");
			}
		}
	});
}

labels.forEach(function(label) {
	label.addEventListener("click", toggleShow);
});

tabs.forEach(function(tab) {
	tab.addEventListener("click", toggleShow);
});

let scrollpos = window.scrollY;
const header = document.querySelector("header");
const main = document.querySelector("main");

if (main !== null) {
	const main_height = main.offsetHeight - (header.offsetHeight / 2);

	header.classList.add("navbar-fixed") 

	window.addEventListener('scroll', function() { 
		scrollpos = window.scrollY;
	
		if (scrollpos >= main_height) {
				header.classList.add("navbar-shrink")
				header.classList.add("navbar-light")
		}
		else { 
				header.classList.remove("navbar-shrink")
				header.classList.remove("navbar-light")
		}
	})
} else {
	header.classList.add("navbar-light")
		
	const header_height = header.offsetHeight

	window.addEventListener('scroll', function() { 
		scrollpos = window.scrollY;
	
		if (scrollpos >= header_height) {
				header.classList.add("navbar-shrink")
				header.classList.add("navbar-fixed") 
		}
		else { 
				header.classList.remove("navbar-shrink")
				header.classList.remove("navbar-fixed") 
		}
	})

}

