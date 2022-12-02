<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'message_airnotifier', language 'uk', version '3.8'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Керуйте пристроями';
$string['airnotifieraccesskey'] = 'Ключ доступу до Airnotifier';
$string['airnotifierappname'] = 'Ім’я програми в Airnotifier';
$string['airnotifiermobileappname'] = 'Назва мобільної програми';
$string['airnotifierport'] = 'Порт Airnotifier';
$string['airnotifierurl'] = 'URL Airnotifier';
$string['configairnotifieraccesskey'] = 'Ключ доступу для підключення до сервера Airnotifier. Ви можете отримати ключ доступу, натиснувши посилання «Запит ключа доступу» нижче (лише зареєстровані сайти) або створивши обліковий запис на <a href="https://apps.moodle.com">порталі Moodle Apps</a>.';
$string['configairnotifierappname'] = 'Ідентифікаційне ім’я програми в Airnotifier';
$string['configairnotifiermobileappname'] = 'Унікальний ідентифікатор мобільного застосунку  (зазвичай щось на зразок com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Порт для підключення до Airnotifier';
$string['configairnotifierurl'] = 'URL-адреса сервера для підключення для надсилання push-повідомлень.';
$string['deletecheckdevicename'] = 'Видалити ваш пристрій: {$a->name}';
$string['deletedevice'] = 'Видалити пристрій. Зверніть увагу, що застосунок може зареєструвати пристрій ще раз. Якщо пристрій може з’являтися, просто відключіть його.';
$string['devicetoken'] = 'Маркер пристрою';
$string['errorretrievingkey'] = 'Під час отримання ключа доступу сталася помилка. Щоб користуватися цією послугою, ваш сайт повинен бути зареєстрований. Якщо ваш сайт уже зареєстрований, спробуйте оновити реєстрацію. Крім того, ви можете отримати ключ доступу, створивши обліковий запис на <a href="https://apps.moodle.com">порталі Moodle Apps</a>.';
$string['keyretrievedsuccessfully'] = 'Ключ доступу успішно отримано. Щоб отримати доступ до статистики використання програми Moodle, створіть обліковий запис на <a href="https://apps.moodle.com">порталі програм Moodle</a>.';
$string['moodleappsportallimitswarning'] = 'Зверніть увагу, що кількість пристроїв користувача, яким дозволено отримувати сповіщення, залежить від вашої підписки на додаток Moodle. Щоб дізнатися більше, відвідайте <a href="https://apps.moodle.com">портал програм Moodle</a>..';
$string['nodevices'] = 'Немає зареєстрованих пристроїв. Пристрої автоматично з’являться після встановлення програми Moodle та додавання цього сайту.';
$string['nopermissiontomanagedevices'] = 'Ви не маєте прав для керування пристроями.';
$string['notconfigured'] = 'Сервер Airnotifier не налаштовано, тому не можна надсилати push-повідомлення.';
$string['pluginname'] = 'Мобільний';
$string['privacy:appiddescription'] = 'Це ідентифікатор програми, що використовується.';
$string['privacy:enableddescription'] = 'Якщо на цьому пристрої ввімкнено airnotifier.';
$string['privacy:metadata:date'] = 'Дата надсилання повідомлення.';
$string['privacy:metadata:enabled'] = 'Чи ввімкнено пристрій airnotifier.';
$string['privacy:metadata:externalpurpose'] = 'Ця інформація надсилається на зовнішній сайт, щоб остаточно доставити її на мобільний пристрій користувача.';
$string['privacy:metadata:fullmessage'] = 'Повне повідомлення.';
$string['privacy:metadata:notification'] = 'Якщо це повідомлення сповіщення.';
$string['privacy:metadata:smallmessage'] = 'Розділ повідомлення.';
$string['privacy:metadata:subject'] = 'Тема повідомлення.';
$string['privacy:metadata:tableexplanation'] = 'Тут зберігається інформація про пристрій Airnotifier.';
$string['privacy:metadata:userdeviceid'] = 'Ідентифікатор, який зв’язується з мобільним пристроєм користувача';
$string['privacy:metadata:userfromfullname'] = 'Повне ім\'я користувача, який надіслав повідомлення.';
$string['privacy:metadata:userfromid'] = 'Ідентифікатор користувача автора повідомлення.';
$string['privacy:metadata:userid'] = 'Ідентифікатор користувача, який надіслав повідомлення.';
$string['privacy:metadata:username'] = 'Ім\'я користувача користувача.';
$string['privacy:metadata:usersubsystem'] = 'Цей плагін підключений до підсистеми користувача.';
$string['privacy:subcontext'] = 'Повідомлення Airnotifier';
$string['requestaccesskey'] = 'Запит ключа доступу';
$string['showhide'] = 'Включити/відключити пристрій';
$string['sitemustberegistered'] = 'Щоб використовувати загальнодоступний екземпляр Airnotifier, ваш сайт має бути зареєстрований. Крім того, ви можете отримати ключ доступу, створивши обліковий запис на <a href="https://apps.moodle.com">порталі Moodle Apps</a>.';
$string['unknowndevice'] = 'Невідомий пристрій';
