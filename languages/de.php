<?php

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Abbrechen',
  'nochanges' => 'Es hat sich nichts geändert',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Abmelden', 
  
  // subheader
  'subheader.home' => 'Home',  
  'subheader.site' => 'Ihre Seite',
  'subheader.info' => 'Info',

  // tabs
  'tabs.content' => 'Inhalt',
  'tabs.pages' => 'Unterseiten',
  'tabs.files' => 'Dateien',
  'tabs.options' => 'URL',

  // home
  'home.siteinfo' => 'Seiten Info',
  'home.edit' => 'Bearbeiten',
  'home.warning.title' => 'Achtung',
  'home.warning.permissions.title' => 'Zugriffsrechte',
  'home.warning.permissions.text' => 'Die Zugriffsrechte in ihrem Inhaltsverzeichnis sind nicht richtig gesetzt. Bitte ändern sie die Rechte für folgende Ordner in <strong>0755</strong> und für alle Dateien in <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Blueprints',
  'home.warning.blueprints.text' => 'Für folgende Templates wurden noch keine Blueprints angelegt.',

  // siteinfo
  'siteinfo.button' => 'Speichern',
  'siteinfo.errors.title' => 'Bitte geben Sie einen Titel ein',

  // content form 
  'content.save' => 'Speichern',
  'content.previous' => 'zurück',
  'content.next' => 'weiter',
  'content.invisible' => 'unsichtbar',
  
  // no content available
  'nocontent.title' => 'Kein Inhalt',
  'nocontent.text' => 'Es ist kein Inhalt für diese Seite verfügbar',
    
  // pages
  'pages.title' => 'Seiten',
  'pages.title.home' => 'Hauptseiten',
  'pages.sort' => 'Sortieren',
  'pages.add' => 'Neue Seite',
  'pages.delete' => 'Entfernen',
  'pages.invisible' => 'Unsichtbare Seiten',
  'pages.no.visible' => 'Es gibt noch keine sichtbaren Seiten',
  'pages.no.invisible' => 'Es gibt noch keine unsichtbaren Seiten',
  'pages.moved' => 'Die Seite wurde verschoben',
  'pages.sorted' => 'Die Seiten wurden sortiert',
  'pages.errors.notfound' => 'Die Seite wurde nicht gefunden',
  'pages.errors.move' => 'Die Seite konnte nicht verschoben werden',
  'pages.errors.sort' => 'Es konnte nicht alle Seiten sortiert werden',
  'pages.errors.nosort' => 'Es gibt nicht zu sortieren',

  // no subpages allowed
  'nopages.title' => 'Unterseiten',
  'nopages.text' => 'Diese Seite kann keine Unterseiten haben',  
  
  // add page
  'pages.add.title' => 'Neue Seite hinzufügen',
  'pages.add.label.title' => 'Titel',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Template',
  'pages.add.button' => 'Speichern',
  'pages.add.errors.title' => 'Bitte geben Sie einen Titel ein',
  'pages.add.errors.url' => 'Bitte geben Sie eine URL ein',
  'pages.add.errors.characters' => 'Bitte nutzen Sie für die URL nur folgende Zeichen: a-z, 0-9, _, -',
  'pages.add.errors.exists' => 'Eine Seite mit dieser URL besteht bereits',
  'pages.add.errors.permissions' => 'Das Verzeichnis konnte nicht angelegt werden',
  'pages.add.success' => 'Die Seite wurde angelegt',

  // update page
  'pages.update.errors.title' => 'Bitte geben Sie einen Titel ein',
     
  // delete page  
  'pages.delete.title' => 'Diese Seite löschen',
  'pages.delete.button' => 'Löschen',
  'pages.delete.errors.homepage' => 'Die Homepage kann nicht gelöscht werden',
  'pages.delete.errors.errorpage' => 'Die Fehlerseite kann nicht gelöscht werden',
  'pages.delete.errors.subpages' => 'Diese Seite hat Unterseiten. Bitte löschen Sie diese zuerst.',
  'pages.delete.errors.permissions' => 'Die Seite konnte nicht gelöscht werden',
  'pages.delete.success' => 'Die Seite wurde gelöscht',
       
  // options
  'options.url' => 'URL',
  'options.button' => 'Speichern',
  'options.home.url' => 'URL',
  'options.home.text' => 'Sie können die URL der Homepage nicht ändern',
  'options.error.text' => 'Sie können die URL der Fehlerseite nicht ändern',
  'options.errors.homepage' => 'Sie können die URL der Homepage nicht ändern',
  'options.errors.errorpage' => 'Sie können die URL der Fehlerseite nicht ändern',
  'options.errors.characters' => 'Bitte nutzen Sie nur folgende Zeichen: a-z, 0-9, _, -',
  'options.errors.permissions' => 'Der Inhaltsordner kann nicht verschoben werden',
  'options.errors.exists' => 'Die neue URL besteht bereits',
  'options.errors.move' => 'Der Inhaltsordner kann nicht verschoben werden',

  // files
  'files.title' => 'Dateien',
  'files.upload' => 'Datei hochladen',
  'files.edit' => 'Bearbeiten',
  'files.replace' => 'Ersetzen',
  'files.delete' => 'Löschen',
  'files.empty' => 'Es wurden noch keine Dateien für diese Seite hochgeladen',

  'nofiles.title' => 'Keine Dateien',
  'nofiles.text' => 'Zu dieser Seite können keine Dateien hochgeladen werden',
  
  // delete file
  'files.delete.title' => 'Diese Datei löschen',
  'files.delete.button' => 'Löschen',
  'files.delete.errors.notfound' => 'Die Datei wurde nicht gefunden',
  'files.delete.errors.permissions' => 'Die Datei konnte nicht gelöscht werden',
  'files.delete.success' => 'Die Datei wurde gelöscht',

  // edit file
  'files.edit.title' => 'Datei bearbeiten',
  'files.edit.filename' => 'Dateiname (ohne Erweiterung)',
  'files.edit.button' => 'Speichern',
  'files.edit.errors.notfound' => 'Die Datei wurde nicht gefunden',
  'files.edit.errors.exists' => 'Der Dateiname besteht bereits',
  'files.edit.errors.permissions' => 'Die Datei konnte nicht umbenannt werden',
  'files.edit.success' => 'Die Datei wurde gespeichert',

  // replace file
  'files.replace.title' => 'Diese Datei ersetzen',
  'files.replace.file' => 'Datei',
  'files.replace.choose' => 'Bitte wählen Sie einen Datei von Ihrem Computer…',
  'files.replace.button' => 'Ersetzen',
  'files.replace.errors.notfound' => 'Die Datei wurde nicht gefunden',
  'files.replace.success' => 'Die Datei wurde ersetzt.',

  // upload file
  'files.upload.title' => 'Neue Datei hochladen',
  'files.upload.choose' => 'Bitte wählen Sie einen Datei von Ihrem Computer…',
  'files.upload.button' => 'Hochladen',
      
  // login  
  'login.button' => 'Anmelden',
  'login.username' => 'Benutzername',
  'login.password' => 'Passwort',
  'login.error' => 'Zugang ungültig',
  'login.success' => 'Sie sind jetzt angemeldet',
  
  // upload
  'upload.errors.missing-file' => 'Die Datei wurde nicht gefunden',
  'upload.errors.file-exists' => 'Die Datei existiert bereits',
  'upload.errors.invalid-upload' => 'Der Upload ist fehlgeschlagen',
  'upload.errors.too-big' => 'Die Datei ist zu groß',
  'upload.errors.invalid-file' => 'Der Dateityp ist nicht erlaubt',
  'upload.errors.move-error' => 'Die Datei konnte nicht auf den Server geladen werden',
  'upload.success' => 'Die Datei wurde hochgeladen',

  // writer
  'writer.errors.permissions' => 'Die Datei ist nicht beschreibbar',
  'writer.errors.write' => 'Die Daten konnten nicht gespeichert werden',
  'writer.success' => 'Die Daten wurden gespeichert',

));

?>