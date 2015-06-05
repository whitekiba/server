<?php
/**
 * @author Jörn Friedrich Dreyer <jfd@butonic.de>
 * @author Morris Jobke <hey@morrisjobke.de>
 * @author Normal Ra <normalraw@gmail.com>
 * @author Olivier Paroz <github@oparoz.com>
 * @author Robin Appelman <icewind@owncloud.com>
 * @author Thomas Tanghus <thomas@tanghus.net>
 * @author tiezdne <oswald.84@t-online.de>
 * @author Victor Dubiniuk <dubiniuk@owncloud.com>
 *
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

/**
 * Array mapping file extensions to mimetypes (in alphabetical order).
 *
 * The first index in the mime type array is the assumed correct mimetype
 * and the second is either a secure alternative or null if the correct
 * is considered secure.
 */
return array(
	'3gp' => array('video/3gpp', null),
	'7z' => array('application/x-7z-compressed', null),
	'accdb' => array('application/msaccess', null),
	'ai' => array('application/illustrator', null),
	'apk' => array('application/vnd.android.package-archive', null),
	'arw' => array('image/x-dcraw', null),
	'avi' => array('video/x-msvideo', null),
	'bash' => array('text/x-shellscript', null),
	'blend' => array('application/x-blender', null),
	'bin' => array('application/x-bin', null),
	'bmp' => array('image/bmp', null),
	'cb7' => array('application/x-cbr', null),
	'cba' => array('application/x-cbr', null),
	'cbr' => array('application/x-cbr', null),
	'cbt' => array('application/x-cbr', null),
	'cbtc' => array('application/x-cbr', null),
	'cbz' => array('application/x-cbr', null),
	'cc' => array('text/x-c', null),
	'cdr' => array('application/coreldraw', null),
	'cnf' => array('text/plain', null),
	'conf' => array('text/plain', null),
	'cpp' => array('text/x-c++src', null),
	'cr2' => array('image/x-dcraw', null),
	'css' => array('text/css', null),
	'csv' => array('text/csv', null),
	'cvbdl' => array('application/x-cbr', null),
	'c' => array('text/x-c', null),
	'c++' => array('text/x-c++src', null),
	'dcr' => array('image/x-dcraw', null),
	'deb' => array('application/x-deb', null),
	'dng' => array('image/x-dcraw', null),
	'doc' => array('application/msword', null),
	'docm' => array('application/vnd.ms-word.document.macroEnabled.12', null),
	'docx' => array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', null),
	'dot' => array('application/msword', null),
	'dotx' => array('application/vnd.openxmlformats-officedocument.wordprocessingml.template', null),
	'dv' => array('video/dv', null),
	'eot' => array('application/vnd.ms-fontobject', null),
	'epub' => array('application/epub+zip', null),
	'eps' => array('application/postscript', null),
	'erf' => array('image/x-dcraw', null),
	'exe' => array('application/x-ms-dos-executable', null),
	'flac' => array('audio/flac', null),
	'flv' => array('video/x-flv', null),
	'gif' => array('image/gif', null),
	'gz' => array('application/x-gzip', null),
	'gzip' => array('application/x-gzip', null),
	'h' => array('text/x-h', null),
	'hh' => array('text/x-h', null),
	'html' => array('text/html', 'text/plain'),
	'htm' => array('text/html', 'text/plain'),
	'ical' => array('text/calendar', null),
	'ics' => array('text/calendar', null),
	'iiq' => array('image/x-dcraw', null),
	'impress' => array('text/impress', null),
	'jpeg' => array('image/jpeg', null),
	'jpg' => array('image/jpeg', null),
	'jps' => array('image/jpeg', null),
	'js' => array('application/javascript', 'text/plain'),
	'json' => array('application/json', 'text/plain'),
	'k25' => array('image/x-dcraw', null),
	'kdc' => array('image/x-dcraw', null),
	'key' => array('application/x-iwork-keynote-sffkey', null),
	'keynote' => array('application/x-iwork-keynote-sffkey', null),
	'kra' => array('application/x-krita', null),
	'm2t' => array('video/mp2t', null),
	'm4v' => array('video/mp4', null),
	'markdown' => array('text/markdown', null),
	'mdown' => array('text/markdown', null),
	'md' => array('text/markdown', null),
	'mdb' => array('application/msaccess', null),
	'mdwn' => array('text/markdown', null),
	'mkd' => array('text/markdown', null),
	'mef' => array('image/x-dcraw', null),
	'mkv' => array('video/x-matroska', null),
	'mobi' => array('application/x-mobipocket-ebook', null),
	'mov' => array('video/quicktime', null),
	'mp3' => array('audio/mpeg', null),
	'mp4' => array('video/mp4', null),
	'mpeg' => array('video/mpeg', null),
	'mpg' => array('video/mpeg', null),
	'mpo' => array('image/jpeg', null),
	'msi' => array('application/x-msi', null),
	'nef' => array('image/x-dcraw', null),
	'numbers' => array('application/x-iwork-numbers-sffnumbers', null),
	'odf' => array('application/vnd.oasis.opendocument.formula', null),
	'odg' => array('application/vnd.oasis.opendocument.graphics', null),
	'odp' => array('application/vnd.oasis.opendocument.presentation', null),
	'ods' => array('application/vnd.oasis.opendocument.spreadsheet', null),
	'odt' => array('application/vnd.oasis.opendocument.text', null),
	'oga' => array('audio/ogg', null),
	'ogg' => array('audio/ogg', null),
	'ogv' => array('video/ogg', null),
	'orf' => array('image/x-dcraw', null),
	'otf' => array('application/font-sfnt', null),
	'pages' => array('application/x-iwork-pages-sffpages', null),
	'pdf' => array('application/pdf', null),
	'pfb' => array('application/x-font', null),
	'pef' => array('image/x-dcraw', null),
	'php' => array('application/x-php', null),
	'pl' => array('application/x-perl', null),
	'png' => array('image/png', null),
	'pot' => array('application/vnd.ms-powerpoint', null),
	'potm' => array('application/vnd.ms-powerpoint.template.macroEnabled.12', null),
	'potx' => array('application/vnd.openxmlformats-officedocument.presentationml.template', null),
	'ppa' => array('application/vnd.ms-powerpoint', null),
	'ppam' => array('application/vnd.ms-powerpoint.addin.macroEnabled.12', null),
	'pps' => array('application/vnd.ms-powerpoint', null),
	'ppsm' => array('application/vnd.ms-powerpoint.slideshow.macroEnabled.12', null),
	'ppsx' => array('application/vnd.openxmlformats-officedocument.presentationml.slideshow', null),
	'ppt' => array('application/vnd.ms-powerpoint', null),
	'pptm' => array('application/vnd.ms-powerpoint.presentation.macroEnabled.12', null),
	'pptx' => array('application/vnd.openxmlformats-officedocument.presentationml.presentation', null),
	'ps' => array('application/postscript', null),
	'psd' => array('application/x-photoshop', null),
	'py' => array('text/x-python', null),
	'raf' => array('image/x-dcraw', null),
	'rar' => array('application/x-rar-compressed', null),
	'reveal' => array('text/reveal', null),
	'rw2' => array('image/x-dcraw', null),
	'sgf' => array('application/sgf', null),
	'sh-lib' => array('text/x-shellscript', null),
	'sh' => array('text/x-shellscript', null),
	'srf' => array('image/x-dcraw', null),
	'sr2' => array('image/x-dcraw', null),
	'svg' => array('image/svg+xml', 'text/plain'),
	'swf' => array('application/x-shockwave-flash', 'application/octet-stream'),
	'tar' => array('application/x-tar', null),
	'tar.gz' => array('application/x-compressed', null),
	'tex' => array('application/x-tex', null),
	'tgz' => array('application/x-compressed', null),
	'tiff' => array('image/tiff', null),
	'tif' => array('image/tiff', null),
	'ttf' => array('application/font-sfnt', null),
	'txt' => array('text/plain', null),
	'vcard' => array('text/vcard', null),
	'vcf' => array('text/vcard', null),
	'vob' => array('video/dvd', null),
	'wav' => array('audio/wav', null),
	'webm' => array('video/webm', null),
	'woff' => array('application/font-woff', null),
	'wmv' => array('video/x-ms-asf', null),
	'xcf' => array('application/x-gimp', null),
	'xla' => array('application/vnd.ms-excel', null),
	'xlam' => array('application/vnd.ms-excel.addin.macroEnabled.12', null),
	'xls' => array('application/vnd.ms-excel', null),
	'xlsb' => array('application/vnd.ms-excel.sheet.binary.macroEnabled.12', null),
	'xlsm' => array('application/vnd.ms-excel.sheet.macroEnabled.12', null),
	'xlsx' => array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', null),
	'xlt' => array('application/vnd.ms-excel', null),
	'xltm' => array('application/vnd.ms-excel.template.macroEnabled.12', null),
	'xltx' => array('application/vnd.openxmlformats-officedocument.spreadsheetml.template', null),
	'xml' => array('application/xml', 'text/plain'),
	'xrf' => array('image/x-dcraw', null),
	'yaml' => array('application/yaml', 'text/plain'),
	'yml' => array('application/yaml', 'text/plain'),
	'zip' => array('application/zip', null),
);
