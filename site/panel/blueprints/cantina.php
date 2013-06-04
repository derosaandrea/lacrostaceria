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
  intro_ita: 
    label: Testo in italiano
    type:  textarea
    size:  small
    buttons: true
  title_en: 
    label: Titolo in inglese
    type:  text
  intro_en: 
    label: Testo in inglese
    type:  textarea
    size:  small
    buttons: true