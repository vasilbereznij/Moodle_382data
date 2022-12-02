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
 * Strings for component 'repository', language 'uk', version '3.8'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Доступність вибору файлу';
$string['activaterep'] = 'Активні сховища';
$string['activerepository'] = 'Доступні модулі сховищ';
$string['activitybackup'] = 'Резервна копія діяльності';
$string['add'] = 'Додати';
$string['addfile'] = 'Додати...';
$string['addfiletext'] = 'Додати файл';
$string['addplugin'] = 'Додати модуль сховища';
$string['allowexternallinks'] = 'Дозволити зовнішні посилання';
$string['areacategoryintro'] = 'Представлення категорії';
$string['areacourseintro'] = 'Введення в курс';
$string['areacourseoverviewfiles'] = 'Зображення курсу';
$string['areamainfile'] = 'Головний файл';
$string['arearoot'] = 'Система';
$string['areauserbackup'] = 'Резервні копії користувача';
$string['areauserdraft'] = 'Чорновики';
$string['areauserpersonal'] = 'Особисті файли';
$string['areauserprofile'] = 'Профайл';
$string['attachedfiles'] = 'Долучені файли';
$string['attachment'] = 'Долучення';
$string['author'] = 'Автор';
$string['automatedbackup'] = 'Автоматизоване резервування';
$string['back'] = 'Назад';
$string['backtodraftfiles'] = 'Повернутися до диспетчера чернеток';
$string['cachecleared'] = 'Кешовані файли видалено';
$string['cacheexpire'] = 'Кеш закінчується';
$string['cannotaccessparentwin'] = 'При використанні HTTPS репозиторій не оновлюється автоматично. Натомість вам потрібно повернутися до засобу вибору файлів і знову вибрати сховище.';
$string['cannotdelete'] = 'Не можна видалити цей файл.';
$string['cannotdownload'] = 'Не можна завантажити цей файл.';
$string['cannotdownloaddir'] = 'Не можна завантажити цей каталог';
$string['cannotinitplugin'] = 'Помилка виклику plugin_init';
$string['cannotunzipcontentunreadable'] = 'Неможливо розпакувати цей файл, оскільки його вміст неможливо прочитати.';
$string['cannotunzipquotaexceeded'] = 'Неможливо розпакувати цей файл, оскільки буде перевищено максимальний розмір, дозволений у цій області чернетки.';
$string['choosealink'] = 'Виберіть посилання...';
$string['chooselicense'] = 'Оберіть ліцензію';
$string['cleancache'] = 'Очистити мій кеш файлів';
$string['close'] = 'Закрити';
$string['commonrepositorysettings'] = 'Загальні налаштування сховища';
$string['configallowexternallinks'] = 'Ця опція дає можливість всім користувачам вибирати чи буде зовнішній носій копіюватися в Moodle чи ні. Якщо це відключено, то носії завжди копіюються в Moodle (це, як правило, краще за все для загальної цілісності та безпеки даних). Якщо це включено, то користувачі можуть самі вибирати кожного разу, коли вони додають нові носії.';
$string['configcacheexpire'] = 'Термін, під час якого списки файлів кешуються локально (в секундах) поки переглядається віддалене сховище.';
$string['configgetfiletimeout'] = 'Очікування в секундах для завантаження зовнішнього файлу в Moodle.';
$string['configsaved'] = 'Налаштування збережено!';
$string['configsyncfiletimeout'] = 'Час очікування в секундах для синхронізації розміру зовнішнього файлу.';
$string['configsyncimagetimeout'] = 'Час очікування в секундах для завантаження файлу зображення із зовнішнього сховища під час синхронізації.';
$string['confirmdelete'] = 'Ви впевнені, що хочете видалити сховище {$a}? Якщо ви виберете «Продовжити та завантажити», посилання на файли на зовнішній вміст будуть завантажені в Moodle. Це може зайняти багато часу для обробки.';
$string['confirmdeletefile'] = 'Ви впевнені, що хочете видалити цей файл?';
$string['confirmdeletefilewithhref'] = 'Ви впевнені, що хочете видалити цей файл? У курсі є посилання {$a} на цей файл як ресурс. Якщо ви продовжите видалення, файл буде скопійований замість вказаного посилання.';
$string['confirmdeletefolder'] = 'Ви впевнені, що хочете видалити цю теку? Будуть видалені також всі підтеки та файли.';
$string['confirmremove'] = 'Ви впевнені, що хочете видалити цей плагін сховища, його параметри та <strong>всі його екземпляри</strong> - {$a}? Якщо ви виберете «Продовжити та завантажити», посилання на файли на зовнішній вміст будуть завантажені в Moodle. Це може зайняти багато часу для обробки.';
$string['confirmrenamefile'] = 'Ви впевнені, що хочете перейменувати/перемістити цей файл? Є {$a} псевдонімів/посилань, які використовують цей файл як джерело. Якщо ви продовжите, то ці псевдоніми будуть перетворені в точні копії.';
$string['confirmrenamefolder'] = 'Ви впевнені, що хочете перейменувати/перемістити цю теку? Всі псевдоніми/посилання на файли, які розташовуються в цій теці будуть перетворені в точні копії.';
$string['continueuninstall'] = 'Продовжити';
$string['continueuninstallanddownload'] = 'Продовжити та завантажити';
$string['copying'] = 'Копіювання';
$string['coursebackup'] = 'Резервні копії курсу';
$string['create'] = 'Створити';
$string['createfolder'] = 'Створити теку';
$string['createfolderfail'] = 'Не вдається створити цю теку';
$string['createfoldersuccess'] = 'Теку успішно створено';
$string['createinstance'] = 'Створити застосування сховища';
$string['createrepository'] = 'Створити застосування сховища';
$string['createxxinstance'] = 'Створити застосування "{$a}"';
$string['date'] = 'Дата';
$string['datecreated'] = 'Створено';
$string['deleted'] = 'Сховище видалено';
$string['deleterepository'] = 'Видалити це сховище';
$string['detailview'] = 'Переглянути деталі';
$string['dimensions'] = 'Розміри';
$string['disabled'] = 'Відключено';
$string['displayasdetails'] = 'Показати файли детально';
$string['displayasicons'] = 'Показати файли піктограмами';
$string['displayastree'] = 'Показати файли деревом';
$string['displaydetails'] = 'Показати теку з властивостями файлів';
$string['displayicons'] = 'Показати теку з піктограмами файлів';
$string['displaytree'] = 'Показати теку як дерево файлів';
$string['download'] = 'Завантажити';
$string['downloadallfiles'] = 'Завантажити всі файли';
$string['downloadfolder'] = 'Завантажити все';
$string['downloadsucc'] = 'Файл успішно завантажено';
$string['draftareanofiles'] = 'Не вдається завантажити через відсутність долучених файлів';
$string['editrepositoryinstance'] = 'Редагувати застосування сховища';
$string['emptylist'] = 'Порожній список';
$string['emptytype'] = 'Не вдається створити тип сховища: назва типу порожня';
$string['enablecourseinstances'] = 'Дозволити користувачам додавати застосування сховища до курсу';
$string['enableuserinstances'] = 'Дозволити користувачам додавати застосування сховища до контексту користувача';
$string['enter'] = 'Розпочати';
$string['entername'] = 'Введіть назву теки';
$string['enternewname'] = 'Вкажіть назву нового файлу';
$string['error'] = 'Виникла невідома помилка!';
$string['errordoublereference'] = 'Неможливо перезаписати файл з ярликом/псевдонімом, оскільки посилання на той файл вже існують';
$string['errornotyourfile'] = 'Ви можете вибрати лише ті файли, які ви додали.';
$string['errorpostmaxsize'] = 'Файл, який ви намагалися завантажити, завеликий для обробки сервером.';
$string['erroruniquename'] = 'Назва застосування сховища повинна бути унікальною';
$string['errorwhilecommunicatingwith'] = 'Помилка під час з’єднання зі сховищем \'{$a}\'.';
$string['errorwhiledownload'] = 'Виникла помилка під час завантаження файлу: {$a}';
$string['existingrepository'] = 'Таке сховище вже створено';
$string['federatedsearch'] = 'Федеративний пошук';
$string['fileexists'] = 'Таке ім’я файлу вже використовується, вкажіть інше';
$string['fileexistsdialog_editor'] = 'Файл з такою назвою вже був приєднаний до редагованого тексту.';
$string['fileexistsdialog_filemanager'] = 'Файл з такою назвою вже був приєднаний';
$string['fileexistsdialogheader'] = 'Файл існує';
$string['filename'] = 'Ім’я файлу';
$string['filenotnull'] = 'Вам потрібно вибрати файл для звантаження.';
$string['filepicker'] = 'Вибір файлу';
$string['filesaved'] = 'Файл збережено';
$string['filesizenull'] = 'Не вдається визначити розмір файлу';
$string['folderexists'] = 'Така назва вже є, введіть, будь ласка, іншу назву';
$string['foldernotfound'] = 'Теку не знайдено';
$string['folderrecurse'] = 'Тека не може бути переміщена у власну підтеку';
$string['getfile'] = 'Вибрати цей файл';
$string['getfiletimeout'] = 'Тайм-аут отримання файлу';
$string['help'] = 'Допомога';
$string['iconview'] = 'Тільки значки';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'застосування';
$string['instancedeleted'] = 'Застосування видалено';
$string['instances'] = 'Застосування сховища';
$string['instancesforcourses'] = '{$a} загально курсових застосувань(ня)';
$string['instancesforsite'] = '{$a} загально сайтових застосувань(ня)';
$string['instancesforusers'] = '{$a} приватно користувацьких застосувань(ня)';
$string['invalidfiletype'] = '{$a} тип файлу не може бути прийнятим';
$string['invalidjson'] = 'Неправильний JSON рядок';
$string['invalidparams'] = 'Неправильні параметри';
$string['invalidplugin'] = 'Недійсний плагін сховища {$a}';
$string['invalidrepositoryid'] = 'Неправильний код сховища';
$string['isactive'] = 'Активний?';
$string['keyword'] = 'Ключове слово';
$string['lastmodified'] = 'Востаннє змінено';
$string['license'] = 'Ліцензія';
$string['linkexternal'] = 'Зовнішнє посилання';
$string['listview'] = 'Списком';
$string['loading'] = 'Завантаження...';
$string['login'] = 'Увійдіть у свій обліковий запис';
$string['logintoaccount'] = 'Увійдіть у свій обліковий запис {$a}';
$string['logout'] = 'Вихід';
$string['lostsource'] = 'Помилка. Відсутнє джерело. {$a}';
$string['makefilecontrolledlink'] = 'Створіть посилання з контрольованим доступом до файлу';
$string['makefileinternal'] = 'Зробити копію файлу';
$string['makefilelink'] = 'Пряме посилання на файл';
$string['makefilereference'] = 'Створити псевдонім/посилання на файл';
$string['manage'] = 'Управління сховищами';
$string['manageinstances'] = 'Управління застосуваннями';
$string['manageurl'] = 'Керувати';
$string['manageuserrepository'] = 'Керування індивідуальними сховищами';
$string['missingsourcekey'] = 'Відсутній вихідний ключ. Цей ключ також необхідно надати для отримання файлу.';
$string['moving'] = 'Переміщення';
$string['name'] = 'Назва';
$string['newfolder'] = 'Нова тека';
$string['newfoldername'] = 'Назва нової теки';
$string['noenter'] = 'Нічого не вказано';
$string['nofilesattached'] = 'Файли не долучено';
$string['nofilesavailable'] = 'Немає доступних файлів';
$string['nomorefiles'] = 'Більше долучень недозволено';
$string['nopathselected'] = 'Ще не вибрано шлях призначення (подвійне клацання вибирає елемент)';
$string['nopermissiontoaccess'] = 'Немає прав для доступу до цього сховища';
$string['norepositoriesavailable'] = 'На жаль, жодне з поточних сховищ не може повернути файли потрібного формату.';
$string['norepositoriesexternalavailable'] = 'На жаль, жодне з поточних сховищ не може повернути зовнішні файли.';
$string['noresult'] = 'Немає результату пошуку';
$string['notyourinstances'] = 'Ви не можете дивитися та редагувати застосування сховища інших користувачів';
$string['off'] = 'Включено але сховано';
$string['on'] = 'Включено та доступно';
$string['openpicker'] = 'Виберіть файл...';
$string['operation'] = 'Операція';
$string['original'] = 'Залишити';
$string['overwrite'] = 'Переписати';
$string['overwriteall'] = 'Переписати все';
$string['path'] = 'Шлях';
$string['plugin'] = 'Плагіни репозиторію';
$string['pluginerror'] = 'Помилки у модулі сховища';
$string['pluginname'] = 'Назва модуля сховища';
$string['pluginnamehelp'] = 'Якщо залишити порожнім, то буде використана типова назва.';
$string['popup'] = 'Натисніть кнопку «Увійти», щоб увійти';
$string['popupblockeddownload'] = 'Вікно завантаження заблоковане, будь ласка, дозвольте виринаючі вікна та повторіть спробу.';
$string['preview'] = 'Попередній перегляд';
$string['privacy:metadata:repository'] = 'Компонент Repository зберігає типи репозиторіїв у основній підсистемі.';
$string['privacy:metadata:repository_instances'] = 'Компонент плагінів репозиторію зберігає дані екземплярів репозиторію користувача в основній підсистемі.';
$string['privacy:metadata:repository_instances:name'] = 'Спеціальна назва екземпляра сховища.';
$string['privacy:metadata:repository_instances:password'] = 'Додатковий пароль, налаштований для екземпляра сховища.';
$string['privacy:metadata:repository_instances:timecreated'] = 'Дата/час створення екземпляра сховища.';
$string['privacy:metadata:repository_instances:timemodified'] = 'Дата/час зміни екземпляра сховища.';
$string['privacy:metadata:repository_instances:typeid'] = 'Тип ідентифікатора екземпляра сховища.';
$string['privacy:metadata:repository_instances:userid'] = 'Ідентифікатор користувача, який володіє екземпляром репозиторію.';
$string['privacy:metadata:repository_instances:username'] = 'Необов’язкове ім’я користувача, настроєне для екземпляра сховища.';
$string['privatefilesof'] = 'Особисті файли {$a}';
$string['readonlyinstance'] = 'Ви не можете редагувати та видаляти застосування з міткою тільки для читання';
$string['referencesexist'] = '{$a} псевдонімів/посилань використовують цей файл як джерело';
$string['referenceslist'] = 'Псевдоніми/Посилання';
$string['refresh'] = 'Оновити';
$string['refreshnonjsfilepicker'] = 'Будь ласка, закрийте це вікно та оновіть вибір файлу без javascript';
$string['removed'] = 'Сховище видалено';
$string['renameall'] = 'Перейменувати все';
$string['renameto'] = 'Перейменувати в "{$a}"';
$string['repositories'] = 'Сховища';
$string['repository'] = 'Сховище';
$string['repositorycourse'] = 'Сховища курсу';
$string['repositoryerror'] = 'Віддалене сховище повернуло помилку: {$a}';
$string['repositoryicon'] = 'Піктограма сховища';
$string['save'] = 'Зберегти';
$string['saveas'] = 'Зберегти як';
$string['saved'] = 'Збережено';
$string['saving'] = 'Збереження';
$string['search'] = 'Пошук';
$string['searching'] = 'Шукати в';
$string['searchrepo'] = 'Пошук в сховищі';
$string['sectionbackup'] = 'Секція резервних копій';
$string['select'] = 'Вибір';
$string['setmainfile'] = 'Встановити головний файл';
$string['setmainfile_help'] = 'За наявності декількох файлів у теці, головним файлом є той, який з\'являється на сторінці перегляду. Інші файли, такі як зображення або відео можуть бути вбудованими в нього. У файловому менеджері головний файл вказується з назвою жирним шрифтом.';
$string['settings'] = 'Налаштування';
$string['setupdefaultplugins'] = 'Налаштування типових модулів сховища';
$string['siteinstances'] = 'Застосування сховищ сайту';
$string['size'] = 'Розмір';
$string['sourcekeymismatch'] = 'URL-адреса джерела не відповідає ключу джерела.';
$string['submit'] = 'Надіслати';
$string['sync'] = 'Синхронізувати';
$string['syncfiletimeout'] = 'Тайм-аут синхронізації файлу';
$string['syncimagetimeout'] = 'Тайм-аут синхронізації зображення';
$string['thumbview'] = 'Значками';
$string['title'] = 'Виберіть файл...';
$string['type'] = 'Тип';
$string['typenotvisible'] = 'Тип не видно';
$string['undisclosedreference'] = '(Невідомо)';
$string['undisclosedsource'] = '(Невідомо)';
$string['unknownoriginal'] = 'Невідомо';
$string['unknownsource'] = 'Невідоме джерело';
$string['unzipped'] = 'Розпакування закінчено';
$string['upload'] = 'Завантажити цей файл';
$string['uploading'] = 'Завантаження...';
$string['uploadsucc'] = 'Файл успішно завантажено';
$string['uselatestfile'] = 'Використати останній файл';
$string['usenonjsfilemanager'] = 'Відкрити файловий менеджер у новому вікні';
$string['usenonjsfilepicker'] = 'Відкрити вибір файлів у новому вікні';
$string['usercontextrepositorydisabled'] = 'Ви не можете редагувати це сховище в контексті користувача';
$string['wrongcontext'] = 'Ви не маєте доступу до цього контексту';
$string['xhtmlerror'] = 'Ймовірно, ви використовуєте XHTML з вимогливим заголовком, деякі YUI компоненти не працюють в цьому режимі, будь ласка, вимкніть його в Moodle';
$string['ziped'] = 'Стискання файлу закінчено';
