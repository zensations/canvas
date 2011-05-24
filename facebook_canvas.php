<?php
require_once "facebook.php";
class FacebookCanvas extends Facebook {
  public $title = FALSE;
  public $page = FALSE;
  public $theme = 'facebook';
  public $language = 'de_DE';
  public $identifier = FALSE;

  function __construct($id, $config) {
    $this->identifier = $id;
    if (array_key_exists('title', $config)) {
      $this->title = $config['title'];
    }
    if (array_key_exists('theme', $config)) {
      $this->theme = $config['theme'];
    }
    if (array_key_exists('page', $config)) {
      $this->page = $config['page'];
    }
    if (array_key_exists('language', $config)) {
      $this->language = $config['language'];
    }
    parent::__construct($config);
  }

  function getJavascriptUrl() {
    return 'https://connect.facebook.net/' . $this->language . '/all.js';
  }
}
