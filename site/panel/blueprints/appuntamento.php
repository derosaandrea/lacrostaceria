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
  title_ita: 
    label: Titolo in italiano
    type:  text
  text_ita: 
    label: Testo in italiano
    type:  textarea
    size:  medium
    buttons: true
  title_en: 
    label: Titolo in inglese
    type:  text
  text_en: 
    label: Testo in inglese
    type:  textarea
    size:  medium
    buttons: true
 