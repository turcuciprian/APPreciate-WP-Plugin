<?php
class ccWidgets {
  private $Array

  private function registerWidget($widgArr){
    while($widgArr){
      add_action( 'widgets_init', function(){
	       register_widget($widgArr['name']);
      });
    }

  }

}
