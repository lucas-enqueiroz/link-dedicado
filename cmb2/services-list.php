<?php

add_action('cmb2_admin_init', 'cmb2_fields_service');

function cmb2_fields_service() {
  $cmb = new_cmb2_box([
    'id' => 'service_box',
    'title' => 'Serviços',
    'object_types' => ['service'],
  ]);

  $cmb->add_field([
    'name' => 'Subtítulo',
    'id' => 'subtitulo',
    'type' => 'text',
  ]);
}