<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: false
files: false
fields:
  title: 
    label: Titolo
    type:  text
    help: Attenzione! Non modificare questo campo
  text_ita: 
    label: Testo in italiano
    type:  textarea
    size:  large
    buttons: true
  text_en: 
    label: Testo in inglese
    type:  textarea
    size:  large
    buttons: true