<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: false
files: false
fields:
  title: 
    label: Titolo sezione
    type:  text
    help: Attenzione! Non modificare questo campo
  title_ita: 
    label: Titolo in italiano
    type:  text
  title_en: 
    label: Titolo in inglese
    type:  text
  text: 
    label: Testo
    type:  textarea
    size:  large
    buttons: true
 