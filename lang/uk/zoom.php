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
 * Strings for component 'zoom', language 'uk', version '3.8'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Дії';
$string['addparticipant'] = 'Додати учасника';
$string['addparticipantgroup'] = 'Додати групу учасників';
$string['addroom'] = 'Додати кімнату';
$string['addroomalert'] = 'Додайте кімнату, натиснувши';
$string['addtocalendar'] = 'Додати до календаря';
$string['allmeetings'] = 'Всі зустрічі';
$string['allmeetings_desc'] = 'За допомогою цього параметра ви можете контролювати, чи показуватиметься посилання на сторінку покажчика активності Zoom унизу кожної сторінки огляду екземпляра діяльності чи ні. Цей параметр впливає лише на представлення посилання на сторінках огляду діяльності Zoom. Навіть якщо ви вирішите не показувати посилання, користувач усе одно зможе отримати доступ до сторінки індексу активності Zoom за іншими посиланнями в межах курсу.';
$string['allmeetings_disable'] = 'Вимкнути посилання на всі зустрічі';
$string['allmeetings_enable'] = 'Увімкнути посилання на всі зустрічі';
$string['alternative_hosts'] = 'Альтернативні Організатори';
$string['alternative_hosts_desc'] = 'За допомогою цього параметра ви можете контролювати, чи відображатиметься опція вибору альтернативних організаторів користувачам у налаштуваннях екземпляра діяльності чи ні. Доступні два типи віджетів: Звичайне поле введення, яке приймає адреси електронної пошти, розділені комами. І засіб вибору користувачів із автозаповненням, який забезпечує легкий вибір користувачів, які зареєстровані на курсі, мають обліковий запис Zoom і роль із {$a->roles}. Альтернативні організатори, які могли бути встановлені викладачем безпосередньо в Zoom, але їх не можна вибрати в засобі вибору користувача Moodle, усе ще показуються на сторінці огляду діяльності, а також зберігаються, коли зустріч оновлюється в Moodle.';
$string['alternative_hosts_disable'] = 'Вимкнути параметр альтернативних організаторів';
$string['alternative_hosts_help'] = 'Альтернативний варіант організатора дозволяє планувати зустрічі та призначати інших користувачів Zoom для початку зустрічі. Ці користувачі отримають електронний лист від Zoom із сповіщенням про те, що їх додано як альтернативного організатора, із посиланням для початку зустрічі. Як формат введення, будь ласка, надайте адресу(и) електронної пошти альтернативного організатора(ів). Ви можете розділити кілька електронних адрес комою (без пропусків).';
$string['alternative_hosts_inputfield'] = 'Показати параметр альтернативних організаторів як звичайне поле введення';
$string['alternative_hosts_picker'] = 'Показати параметр альтернативних організаторів як засіб вибору користувача з автозавершенням';
$string['alternative_hosts_picker_help'] = 'Варіант альтернативного організатора дозволяє вам планувати зустрічі та призначати інших користувачів Zoom, зареєстрованих на цьому курсі, для початку зустрічі. Ці користувачі отримають електронний лист від Zoom із сповіщенням про те, що їх додано як альтернативного організатора, із посиланням для початку зустрічі. Ви можете вибрати одного або кількох альтернативних організаторів залежно від ваших потреб.
Якщо ви не можете знайти певного користувача в цьому засобі вибору користувачів, це означає, що цей користувач або не зареєстрований на цьому курсі з відповідною роллю, або не має відповідного облікового запису в Zoom.';
$string['alternative_hosts_picker_noneselected'] = 'Ви вибрано альтернативних організаторів';
$string['alternative_hosts_picker_placeholder'] = 'Виберіть користувача(ів)';
$string['apiendpoint'] = 'Кінцева точка Zoom API';
$string['apiendpoint_desc'] = 'Виберіть кінцеву точку Zoom API для підключення до Zoom. Глобальна кінцева точка API має працювати для всіх користувачів. Кінцева точка API Європейського Союзу (ЄС) призначена лише для користувачів, які мають ліцензію Zoom із опцією підготовки ЄС. Якщо ви не впевнені, використовуйте глобальну кінцеву точку API.';
$string['apiendpoint_eu'] = 'Європейська кінцева точка API';
$string['apiendpoint_global'] = 'Глобальна кінцева точка API';
$string['apiidentifier'] = 'Ідентифікатор Zoom API';
$string['apiidentifier_desc'] = 'Поле ідентифікатора для використання під час виклику Zoom API';
$string['audio_both'] = 'Комп\'ютерна аудіосистема та телефон';
$string['audio_telephony'] = 'Тільки телефон';
$string['audio_voip'] = 'Лише аудіо з комп’ютера';
$string['audiodefault'] = 'Типове аудіо';
$string['authentication'] = 'Автентифікація';
$string['breakoutrooms'] = 'Окремі кімнати';
$string['cachedef_zoomid'] = 'Ідентифікатор користувача Zoom';
$string['cachedef_zoommeetingsecurity'] = 'Zoom відповідає параметрам безпеки, включаючи вимоги до пароля облікового запису';
$string['calendardescriptionURL'] = 'URL-адреса приєднання до зустрічі: {$a}.';
$string['calendardescriptionintro'] = 'Опис: {$a}';
$string['calendariconalt'] = 'Піктограма календаря';
$string['changehost'] = 'Змінити організатора';
$string['clickjoin'] = 'Натиснуто кнопку приєднатися до зустрічі';
$string['connectionfailed'] = 'Підключення не вдалося:';
$string['connectionok'] = 'Підключення працює.';
$string['connectionsettings'] = 'Налаштування підключення';
$string['connectionsettings_desc'] = 'Ці налаштування визначають спосіб підключення Moodle до Zoom.';
$string['connectionstatus'] = 'Статус підключення';
$string['day'] = 'Днів';
$string['defaultsettings'] = 'Типові налаштування Zoom';
$string['defaultsettings_help'] = 'Ці налаштування визначаються як стандартні для всіх нових зустрічей і вебінарів Zoom.';
$string['deletemeetingrecordings'] = 'Видалити записи зустрічі з Moodle';
$string['deleteroom'] = 'Видалити кімнату';
$string['displayleadtime'] = 'Показати час виконання';
$string['displayleadtime_desc'] = 'Якщо ввімкнено, користувачам показуватиметься час виконання. Таким чином користувачі отримують інформацію про те, що / коли вони можуть приєднатися до зустрічі до запланованого часу початку. Це може допомогти користувачам перестати постійно перезавантажувати сторінку, доки вони не зможуть приєднатися.';
$string['displayleadtime_nohideif'] = 'Будь ласка, зверніть увагу: це налаштування опрацьовується, лише якщо параметр \'{$a}\' має значення більше нуля.';
$string['displaypassword'] = 'Показати пароль';
$string['displaypassword_help'] = 'Якщо ввімкнено, пароль зустрічі завжди показуватиметься для тих, хто не є організаторами.';
$string['downloadical'] = 'Завантажити iCal';
$string['downloadical_desc'] = 'За допомогою цього параметра ви можете контролювати, чи показуватиметься посилання для завантаження файлу iCal для зустрічі на сторінці огляду екземпляра діяльності чи ні. Цей параметр впливає лише на можливість завантажувати файл iCal для інструментів календаря сторонніх виробників. Незалежно від цього налаштування, діяльність зустрічі Zoom додасть запис про зустріч до календаря Moodle, щойно буде встановлено дату початку зустрічі.';
$string['downloadical_disable'] = 'Вимкнути посилання для завантаження iCal';
$string['downloadical_enable'] = 'Увімкнути посилання для завантаження iCal';
$string['duration'] = 'Тривалість (хвилин)';
$string['encryptiontype'] = 'Тип шифрування';
$string['encryptiontype_alwaysshow'] = 'Завжди показувати засіб вибору типу шифрування незалежно від того, чи може користувач використовувати наскрізне шифрування чи ні';
$string['encryptiontype_desc'] = 'За допомогою цього параметра ви можете контролювати, чи показуватиметься опція вибору наскрізного шифрування замість розширеного шифрування для користувачів у налаштуваннях екземпляра діяльності чи ні. Це налаштування впливає лише на налаштування екземпляра діяльності Moodle. Навіть якщо ви вирішите завжди показувати опцію, користувачеві все одно знадобиться наскрізне шифрування в Zoom, щоб нарешті ввімкнути наскрізне шифрування.';
$string['encryptiontype_disable'] = 'Вимкнути засіб вибору типу шифрування';
$string['encryptiontype_showonlyife2epossible'] = 'Показувати засіб вибору типу шифрування, лише якщо користувач може використовувати наскрізне шифрування';
$string['end_date_option_after'] = 'Після';
$string['end_date_option_by'] = 'До';
$string['end_date_option_occurrences'] = 'випадки';
$string['enddate'] = 'Дата закінчення';
$string['endtime'] = 'Час закінчення';
$string['err_downloadicaldisabled'] = 'Завантаження файлів iCal для зустрічі Zoom вимкнено.';
$string['err_downloadicalrecurringempty'] = 'Завантажити файл iCal зустрічі Zoom неможливо для цієї зустрічі, оскільки він не містить жодного випадку.';
$string['err_downloadicalrecurringnofixed'] = 'Завантажити файл iCal зустрічі Zoom неможливо для цієї зустрічі, оскільки це повторювана зустріч без фіксованого часу.';
$string['err_duration_nonpositive'] = 'Тривалість має бути позитивною.';
$string['err_duration_too_long'] = 'Тривалість не може перевищувати 150 годин.';
$string['err_end_date'] = 'Кінцева дата повторення не може бути в минулому';
$string['err_end_date_before_start'] = 'Кінцева дата повторення не може передувати даті початку';
$string['err_invalid_password'] = 'Пароль містить недійсні символи.';
$string['err_long_timeframe'] = 'Запитаний часовий проміжок задовгий, показано результати останнього місяця в діапазоні.';
$string['err_password'] = 'Пароль може містити лише такі символи: [a-z A-Z 0-9 @ - _ *]. Максимум 10 символів.';
$string['err_password_required'] = 'Потрібно ввести пароль.';
$string['err_repeat_monthly_interval'] = 'Максимальний інтервал місячних зустрічей становить 3 місяці';
$string['err_repeat_weekly_interval'] = 'Максимальна тривалість щотижневої зустрічі становить 12 тижнів';
$string['err_start_time_past'] = 'Дата початку не може бути в минулому';
$string['err_start_time_past_recurring'] = 'Для повторюваних зустрічей частина дати цього поля є найранішою можливою датою наступної зустрічі. Ця дата має бути сьогодні або в майбутньому.';
$string['err_weekly_days'] = 'Виберіть дні для повторюваної щотижневої зустрічі';
$string['erroraddinstance'] = 'Не вдалося створити нову зустріч Zoom. Для повторюваної зустрічі вибрано недійсні параметри.';
$string['errorwebservice'] = 'Помилка веб-сервісу Zoom: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom отримав неправильний запит: {$a}';
$string['errorwebservice_notfound'] = 'Ресурсу не існує';
$string['export'] = 'Експорт';
$string['externaluser'] = 'Зовнішній користувач';
$string['firstjoin'] = 'Можливість приєднатися перед організатором';
$string['firstjoin_desc'] = 'Найраніше, коли користувач може приєднатися до запланованої зустрічі (за кілька хвилин до початку).';
$string['getmeetingrecordings'] = 'Отримати записи зустрічей із Zoom';
$string['getmeetingreports'] = 'Отримати звіт про зустріч із Zoom';
$string['globalsettings'] = 'Глобальні налаштування';
$string['globalsettings_desc'] = 'Ці налаштування застосовуються до модуля Zoom в цілому.';
$string['host'] = 'Організатор';
$string['hostintro'] = '<a target="_blank" href="https://support.zoom.us/hc/en-us/articles/208220166">Альтернативні організатори</a> можуть розпочинати зустрічі в Zoom та керувати Кімнатою очікування.';
$string['indicator:cognitivedepth'] = 'Zoom пізнавальний';
$string['indicator:cognitivedepth_help'] = 'Цей показник базується на глибині пізнання, досягнутого студентом під час діяльності в Zoom.';
$string['indicator:socialbreadth'] = 'Zoom соціальний';
$string['indicator:socialbreadth_help'] = 'Цей показник базується на соціальному сприйнятті, досягнутому студентом під час діяльності в Zoom.';
$string['invalid_status'] = 'Статус недійсний, перевірте базу даних';
$string['invalidscheduleuser'] = 'Ви не можемо запланувати для вказаного користувача.';
$string['invitation_dialin'] = 'Шаблон Телефонування';
$string['invitation_dialin_help'] = 'Шаблон регулярного виразу для пошуку телефонування до зустрічі Zoom у цифрах.';
$string['invitation_h323'] = 'Шаблон повідомлення H.323';
$string['invitation_h323_help'] = 'Шаблон регулярного виразу для пошуку H.323 інформації в Zoom зустрічі. Якщо ваші запрошення не містять елементів SIP або H.323, установіть відповідний шаблон регулярного виразу як порожній рядок. (Це особливо стосується серверів із увімкненим налагодженням, оскільки це може порушити формат спеціальних типів файлів, таких як експорт iCal.)';
$string['invitation_icallink'] = 'Шаблон повідомлення з посиланням iCal';
$string['invitation_icallink_help'] = 'Шаблон регулярного виразу для пошуку посилання iCal до зустрічі Zoom.';
$string['invitation_invite'] = 'Шаблон повідомлення запрошення';
$string['invitation_invite_help'] = 'Шаблон регулярного виразу для пошуку вступного повідомлення до зустрічі Zoom.';
$string['invitation_joinurl'] = 'Шаблон URL приєднання';
$string['invitation_joinurl_help'] = 'Шаблон регулярного виразу для пошуку URL-адреси приєднання до зустрічі Zoom.';
$string['invitation_onetapmobile'] = 'Шаблон одного дотику';
$string['invitation_onetapmobile_help'] = 'Шаблон регулярного виразу, щоб знайти деталі мобільної зустрічі Zoom одним дотиком.';
$string['invitation_sip'] = 'Шаблон SIP';
$string['invitation_sip_help'] = 'Шаблон регулярного виразу для пошуку інформації SIP зустрічі Zoom. Якщо ваші запрошення не містять елементів SIP або H.323, установіть відповідний шаблон регулярного виразу як порожній рядок. (Це особливо стосується серверів із увімкненим налагодженням, оскільки це може порушити формат спеціальних типів файлів, таких як експорт iCal.)';
$string['invitationmatchnotfound'] = 'Не знайдено збігів у запрошенні Zoom для елемента: "{$a->element}" з шаблоном: "{$a->pattern}".';
$string['invitationmodificationfailed'] = 'Помилка в регулярному виразі для елемента запрошення Zoom: "{$a->element}" з шаблоном: "{$a->pattern}".';
$string['invitationregex'] = 'Регулярний вираз і можливості запрошення Zoom';
$string['invitationregex_help'] = 'Визначте шаблони регулярних виразів, щоб ізолювати кожну частину запрошення до Zoom, щоб інформацією можна було керувати за допомогою прав користувачів.';
$string['invitationregex_nohideif'] = 'Зверніть увагу: шаблони регулярних виразів використовуватимуться, лише якщо ввімкнено параметр \'{$a}\'.';
$string['invitationregexenabled'] = 'Увімкнути регулярні вирази і права для запрошень Zoom.';
$string['invitationregexenabled_help'] = 'Якщо ввімкнено, запрошення до Zoom, що показуються в діяльності, буде розбито на елементи за допомогою такого регулярного виразу, а права використовуватимуться для вирішення, які частини відображати кожному користувачеві. Перегляньте права zoom/viewjoinurl та zoom/viewdialin.';
$string['invitationremoveicallink'] = 'Видалити посилання iCal для запрошення до Zoom';
$string['invitationremoveicallink_help'] = 'Якщо ввімкнено, посилання iCal, яке може бути включене в повідомлення електронної пошти про зустріч Zoom, буде видалено за допомогою шаблону регулярного виразу invitation_icallink.';
$string['invitationremoveinvite'] = 'Видалити запрошення до Zoom';
$string['invitationremoveinvite_help'] = 'Якщо ввімкнено, вступне речення в повідомленні електронної пошти про нараду Zoom буде видалено за допомогою шаблону регулярного виразу invitation_invite.';
$string['join'] = 'Приєднатися';
$string['join_meeting'] = 'Приєднатися до зустрічі';
$string['joinbeforehost'] = 'Приєднатися до зустрічі перед організатором';
$string['joinbeforehostenable'] = 'Дозволити учасникам приєднуватися в будь-який час';
$string['joinlink'] = 'Посилання на приєднання';
$string['jointime'] = 'Час приєднання';
$string['leavetime'] = 'Час виходу';
$string['licenseonjoin'] = 'Виберіть цей параметр, якщо ви хочете, щоб організатор отримав ліцензію після початку зустрічі, <i>а також</i> після створення.';
$string['licensesettings'] = 'Налаштування ліцензії';
$string['licensesettings_desc'] = 'Ці налаштування визначають спосіб обробки Moodle вашої ліцензії Zoom.';
$string['licensesnumber'] = 'Кількість ліцензій';
$string['lowlicenses'] = 'Якщо кількість ваших ліцензій перевищує необхідну, то при створенні кожної нової діяльності користувачем йому буде присвоєна ліцензія PRO шляхом зниження статусу іншого користувача. Опція діє при кількості активних PRO-ліцензій більше 5.';
$string['maskparticipantdata'] = 'Маска даних учасника';
$string['maskparticipantdata_help'] = 'Запобігає відображенню даних учасників у звітах (корисно для сайтів, які маскують дані учасників, наприклад, для HIPAA).';
$string['media'] = 'Медіа';
$string['meeting_finished'] = 'Закінчено';
$string['meeting_invite'] = 'Інформація про телефон/дзвінок';
$string['meeting_invite_hide'] = 'Приховати запрошення на зустріч';
$string['meeting_invite_show'] = 'Показати запрошення на зустріч';
$string['meeting_nonexistent_on_zoom'] = 'Немає в Zoom';
$string['meeting_not_started'] = 'Не розпочато';
$string['meeting_started'] = 'В процесі';
$string['meeting_time'] = 'Час початку';
$string['meetingcapacitywarning'] = 'Попередження про кількість місць для зустрічі';
$string['meetingcapacitywarning_desc'] = 'За допомогою цього параметра ви можете показувати сповіщення з попередженням, якщо на курсі більше активних і зареєстрованих учасників, ніж кількість учасників для проведення зустрічей у ліцензії Zoom. Сповіщення буде показано організатору (та альтернативним організаторам) на сторінці огляду діяльності Zoom. Віно рекомендуватиме організатору звернутися до власника облікового запису Zoom, щоб отримати більшу ліцензію Zoom, якщо це необхідно. Ви можете змінити це повідомлення за допомогою налаштування мови Moodle.';
$string['meetingcapacitywarning_disable'] = 'Вимкнути попередження про кількість місць';
$string['meetingcapacitywarning_enable'] = 'Увімкнути попередження про кількість місць';
$string['meetingcapacitywarningbodyalthost'] = 'Ліцензія Zoom організатора цієї зустрічі, {$a->hostname},  має обмеження на <strong>{$a->meetingcapacity} учасників</strong>, проте цей курс має <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} зареєстрованих та активних учасників</a></strong>.';
$string['meetingcapacitywarningbodyrealhost'] = 'Ваша Zoom ліцензія має обмеження на <strong><a href="{$a->zoomprofileurl}" target="_blank">{$a->meetingcapacity} учасників</a></strong>, проте цей курс має <strong><a href="{$a->courseparticipantsurl}">{$a->eligiblemeetingparticipants} зареєстрованих та активних учасників</a></strong>.';
$string['meetingcapacitywarningcontactalthost'] = 'Будь ласка, попросіть організатора звернутися до власника облікового запису Zoom, щоб отримати більшу ліцензію Zoom, якщо всім цим учасникам курсу потрібно приєднатися до зустрічі.';
$string['meetingcapacitywarningcontactrealhost'] = 'Зверніться до власника облікового запису Zoom, щоб отримати більшу ліцензію Zoom, якщо всім цим учасникам курсу потрібно приєднатися до зустрічі.';
$string['meetingcapacitywarningheading'] = 'Попередження про кількість учасників:';
$string['meetingparticipantsdeleted'] = 'Дані користувача учасника зустрічі видалено.';
$string['meetingrecordingviewsdeleted'] = 'Дані запису користувача зустрічі видалено.';
$string['modulename'] = 'Zoom зустріч';
$string['modulename_help'] = 'Zoom — це платформа для відео- та веб-конференцій, яка дає авторизованим користувачам можливість проводити онлайн-зустрічі.';
$string['modulenameplural'] = 'Zoom Зустрічі';
$string['month'] = 'Місяць(і)';
$string['month_day_text'] = 'місяця';
$string['newmeetings'] = 'Нові зустрічі';
$string['nextoccurrence'] = 'Наступна зустріч';
$string['nomeetinginstances'] = 'Немає сеансів для цієї зустрічі.';
$string['nooccurrenceleft'] = 'Остання зустріч уже закінчилася';
$string['noparticipants'] = 'На даний момент для цього сеансу не знайдено учасників.';
$string['norecordings'] = 'Наразі не знайдено записів цієї зустрічі.';
$string['norooms'] = 'Без кімнат';
$string['nosessions'] = 'Для вказаного діапазону сеансів не знайдено.';
$string['nozooms'] = 'Без зустрічей';
$string['nozoomsfound'] = 'Для даного курсу не знайдено зустрічей.';
$string['occurson'] = 'Відбувається на';
$string['off'] = 'Вимкнуто';
$string['oldmeetings'] = 'Завершені зустрічі';
$string['on'] = 'Увімкнуто';
$string['option_audio'] = 'Опції аудіо';
$string['option_audio_help'] = 'За допомогою цього параметра ви можете дозволити користувачам дзвонити лише за допомогою телефону, лише комп’ютерного звуку або обох';
$string['option_authenticated_users'] = 'Для приєднання потрібна автентифікація';
$string['option_authenticated_users_help'] = 'Якщо увімкнути цю опцію, усі учасники мають увійти за допомогою свого авторизованого облікового запису zoom, щоб мати можливість приєднатися до зустрічі. Це жодним чином <em>не</em> стосується входу в Moodle.';
$string['option_encryption_type'] = 'Шифрування';
$string['option_encryption_type_endtoendencryption'] = 'Наскрізне шифрування';
$string['option_encryption_type_enhancedencryption'] = 'Покращене шифрування';
$string['option_encryption_type_help'] = 'За допомогою цієї опції ви контролюєте рівень шифрування та конфіденційності цієї зустрічі.

*Покращене шифрування* означає, що ключ шифрування зберігається в хмарі Zoom.

*Наскрізне шифрування* означає, що ключ шифрування зберігається на вашому локальному пристрої, і ніхто інший не може отримати ваш ключ шифрування, навіть Zoom.

Зауважте, що коли ви увімкнете наскрізне шифрування, деякі функції будуть недоступні під час зустрічі - [Див. докладну інформацію в документації Zoom] (https://support.zoom.us/hc/en-us/articles/360048660871).';
$string['option_host_video'] = 'Відео організатора';
$string['option_host_video_help'] = 'Якщо увімкнути цю опцію, увімкнеться відео організатора під час приєднання до зустрічі. Навіть якщо ви вимкнете, ведучий матиме можливість запустити своє відео.';
$string['option_jbh'] = 'Приєднатися перед організатором';
$string['option_jbh_help'] = 'Увімкнення цього параметра дозволяє учасникам приєднатися до зустрічі до того, як приєднається організатор або коли організатор не може бути присутнім на нараді. Цей параметр є взаємовиключним із параметром "Кімната очікування", тому вибір одного призведе до вимкнення іншого.';
$string['option_mute_upon_entry'] = 'Вимкнення звуку учасників після входу';
$string['option_mute_upon_entry_help'] = 'Увімкнення цієї опції призведе до автоматичного вимкнення звуку всіх учасників, коли вони приєднуються до зустрічі. Учасники можуть увімкнути себе після приєднання до зустрічі.';
$string['option_participants_video'] = 'Відео учасників';
$string['option_participants_video_help'] = 'Увімкнення цієї опції дозволить увімкнути відео учасників під час приєднання до зустрічі. Навіть якщо ви виберете, учасники все одно матимуть можливість увімкнути своє відео потім.';
$string['option_proxyhost'] = 'Використати проксі';
$string['option_proxyhost_desc'] = 'Проксі, прописане тут як \'<code>&lt;hostname&gt;:&lt;port&gt;</code>\', використовується лише для комунікації із Zoom. Залиште порожнім, щоб використовувати налаштування проксі Moodle за замовчуванням. Це потрібно встановити, лише якщо ви не хочете встановлювати глобальний проксі-сервер у Moodle.';
$string['option_view_recordings'] = 'Дозволити перегляд записів';
$string['option_waiting_room'] = 'Кімната очікування';
$string['option_waiting_room_help'] = 'Увімкнення цього параметра дозволяє організатору контролювати, коли учасник приєднується до зустрічі. Цей параметр є взаємовиключним із параметром "Приєднатися перед організатором", тому вибір одного призведе до вимкнення іншого.';
$string['participantdatanotavailable'] = 'Деталі недоступні';
$string['participantdatanotavailable_help'] = 'Дані учасників недоступні для цього сеансу Zoom (наприклад, через відповідність вимогам HIPAA).';
$string['participantgroups'] = 'Групи учасників';
$string['participants'] = 'Учасники';
$string['password'] = 'Пароль';
$string['password_allowed_char'] = 'Пароль може містити лише такі символи: [a-z A-Z 0-9 @ - _ *].';
$string['password_consecutive'] = 'Максимальна кількість послідовних символів (abcd, 1111, 1234 тощо): {$a}.';
$string['password_length'] = 'Мінімальна кількість символів: {$a}';
$string['password_letter'] = 'Пароль повинен містити принаймні 1 літеру.';
$string['password_lower_upper'] = 'Пароль повинен містити як малі, так і великі символи.';
$string['password_max_length'] = 'Максимум 10 символів.';
$string['password_number'] = 'Пароль повинен містити принаймні 1 цифру.';
$string['password_only_numeric'] = 'Пароль може містити лише цифри і ніяких інших символів.';
$string['password_special'] = 'Пароль повинен містити принаймні 1 спеціальний символ (@-_*).';
$string['passwordprotected'] = 'Захищено паролем';
$string['pluginadministration'] = 'Керування зустріччю Zoom';
$string['pluginname'] = 'Zoom зустріч';
$string['privacy:metadata:zoom_breakout_participants'] = 'Таблиця бази даних, у якій зберігається список учасників сеансів зустрічі Zoom';
$string['privacy:metadata:zoom_breakout_participants:userid'] = 'Ідентифікатор користувача-учасника';
$string['privacy:metadata:zoom_meeting_details'] = 'Таблиця бази даних, яка зберігає інформацію про кожну зустріч.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'Назва зустрічі, яку відвідав користувач.';
$string['privacy:metadata:zoom_meeting_participants'] = 'Таблиця бази даних, яка зберігає інформацію про учасників зустрічі.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Як довго учасник був на зустрічі';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'Час, коли учасник приєднався до зустрічі';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'Час, коли учасник залишив зустріч';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'Ім\'я учасника';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'Електронна адреса учасника';
$string['privacy:metadata:zoom_meeting_view'] = 'Таблиця бази даних для відстеження користувачів, які переглядають записи зустрічей';
$string['privacy:metadata:zoom_meeting_view:userid'] = 'Ідентифікатор користувача, який переглядав запис';
$string['recording'] = 'Запис';
$string['recordingadd'] = 'Додати запис';
$string['recordingdate'] = 'Дата запису';
$string['recordingdelete'] = 'Ви впевнені, що хочете видалити запис "{$a}"?';
$string['recordinghide'] = 'Приховати запис (наразі видимий)';
$string['recordinglink'] = 'Посилання на запис';
$string['recordingname'] = 'Назва';
$string['recordingnotfound'] = 'Запис не знайдено';
$string['recordingnotvisible'] = 'Запис не видно. Зверніться до свого системного адміністратора, якщо ви вважаєте, що це помилка';
$string['recordingpasscode'] = 'Пароль запису';
$string['recordings'] = 'Записи';
$string['recordingshow'] = 'Показати запис (наразі приховано)';
$string['recordingshowtoggle'] = 'Перемикнути показ запису';
$string['recordingtypeaudio'] = 'Тільки аудіо';
$string['recordingtypevideo'] = 'Відео та аудіо';
$string['recordingurl'] = 'URL запису';
$string['recordingview'] = 'Переглянути записи';
$string['recordingvisibility'] = 'Чи показувати записи цієї зустрічі за умовчанням?';
$string['recordingvisibility_help'] = 'Чи повинні вони за замовчуванням бути видимими в Moodle під час отримання нових записів для цієї зустрічі?';
$string['recreatesuccessful'] = 'Успішно відтворено зустріч';
$string['recurrence_option_daily'] = 'Щоденно';
$string['recurrence_option_monthly'] = 'Щомісячно';
$string['recurrence_option_no_time'] = 'Немає фіксованого часу';
$string['recurrence_option_weekly'] = 'Щотижнево';
$string['recurrencetype'] = 'Повторюваність';
$string['recurringmeeting'] = 'Повторювана зустріч';
$string['recurringmeeting_help'] = 'Увімкнення цього параметра зробить зустріч повторюваною без дати чи часу завершення. Тоді до неї можна буде отримати доступ будь-коли.';
$string['recurringmeetingexplanation'] = 'Зустріч не має кінцевої дати чи часу';
$string['recurringmeetinglong'] = 'Повторювана зустріч (зустріч без дати або часу закінчення)';
$string['recurringmeetingthisis'] = 'Це повторювана зустріч';
$string['recycleonjoin'] = 'Замінити ліцензію після приєднання';
$string['redefinelicenses'] = 'Перевизначити ліцензії';
$string['refreshreports'] = 'Оновити звіти';
$string['repeatinterval'] = 'Повторювати';
$string['report'] = 'Звіти';
$string['reportapicalls'] = 'Повідомити про вичерпані виклики API';
$string['requirepasscode'] = 'Вимагати пароль для доступу до зустрічі';
$string['requirepasscode_help'] = 'Якщо увімкнути цю опцію, організатор повинен встановити пароль для зустрічі. Учасники, які приєднуються, повинні будуть ввести його перед приєднанням до зустрічі. Учасникам, які входять до зустрічі з Moodle, не потрібно вводити цей пароль.';
$string['resetapicalls'] = 'Скинути кількість доступних викликів API';
$string['resetzoomsall'] = 'Видалити всі оцінки користувачів, дані про перегляди користувачів і дані про учасників зустрічі.';
$string['room'] = 'Кімната';
$string['roomname'] = 'Назва кімнати';
$string['rooms'] = 'Кімнати';
$string['schedule'] = 'Розклад';
$string['schedulefor'] = 'Розклад зустрічей для';
$string['schedulefor_help'] = 'Ви можете планувати зустрічі від імені іншого користувача. Як передумова, цей користувач має надати вам право планування в Zoom. Вибраний користувач буде організатором зустрічі та буде тим, чия ліцензія Zoom використовуватиметься для наради.';
$string['scheduleforself'] = 'себе';
$string['schedulingprivilege'] = 'Привілей планування';
$string['schedulingprivilege_desc'] = 'За допомогою цього параметра ви можете контролювати, чи параметр привілею планування показуватиметься користувачам у налаштуваннях екземпляра діяльності чи ні. Це налаштування впливає лише на налаштування екземпляра діяльності Moodle. Навіть якщо ви вирішите показати опцію, користувачеві все одно потрібно буде отримати привілей планування, наданий іншим користувачем у Zoom, щоб остаточно запланувати зустріч для іншого користувача.';
$string['schedulingprivilege_disable'] = 'Вимкнути';
$string['schedulingprivilege_enable'] = 'Увімкнути  параметр привілею планування';
$string['search:activity'] = 'Zoom - інформація про діяльність';
$string['security'] = 'Безпека';
$string['selectionarea'] = 'Не вибрано';
$string['sessions'] = 'Сесії';
$string['sessionsreport'] = 'Звіт по сесії';
$string['sesskeyinvalid'] = 'Виявлено недійсний сеанс. Не можна продовжувати далі.';
$string['setpasscode'] = 'Встановити пароль';
$string['showmedia'] = 'Показувати розділ "Медіа"';
$string['showmedia_help'] = 'Якщо увімкнути цю опцію, на сторінці діяльності зустрічі буде показано розділ "Медіа".';
$string['showmediaonview'] = 'Показувати розділ "Медіа" на сторінці зустрічі';
$string['showschedule'] = 'Показати розділ "Розклад"';
$string['showschedule_help'] = 'Якщо увімкнути цю опцію, на сторінці діяльності зустрічі буде показано розділ "Розклад".';
$string['showscheduleonview'] = 'Показувати розділ "Розклад" на сторінці зустрічі';
$string['showsecurity'] = 'Показати розділ "Безпека"';
$string['showsecurity_help'] = 'Якщо увімкнути цю опцію, на сторінці діяльності зустрічі буде показано розділ "Безпека".';
$string['showsecurityonview'] = 'Показувати розділ "Безпека" на сторінці зустрічі';
$string['start'] = 'Почати';
$string['start_meeting'] = 'Почати зустріч';
$string['start_time'] = 'Коли';
$string['starthostjoins'] = 'Почати відео, коли приєднується організатор';
$string['startpartjoins'] = 'Почати відео, коли приєднується учасник';
$string['starttime'] = 'Час початку';
$string['status'] = 'Статус';
$string['supplementaryfeaturessettings'] = 'Налаштування додаткових функцій';
$string['supplementaryfeaturessettings_desc'] = 'Ці параметри визначають, чи надаються користувачам додаткові функції Zoom і як.';
$string['title'] = 'Назва';
$string['topic'] = 'Тема';
$string['trackingfields'] = 'Відстеження полів';
$string['trackingfields_help'] = 'Введіть назви/мітки поля відстеження, розділені комами, щоб увімкнути дії Zoom.';
$string['trackingfields_recommendedvalues'] = 'Рекомендовані значення:';
$string['unavailable'] = 'Наразі ви не можете приєднатися.';
$string['unavailablefinished'] = 'Зустріч вже закінчилася.';
$string['unavailablefirstjoin'] = 'Ви можете приєднатися не раніше ніж за  {$a->mins} хвилин до запланованого часу початку.';
$string['unavailablenotstartedyet'] = 'Зустріч ще не почалася.';
$string['updatemeetings'] = 'Оновити налаштування зустрічей із Zoom';
$string['updatetrackingfields'] = 'Оновіть налаштування поля відстеження з Zoom';
$string['usepersonalmeeting'] = 'Використовувати особистий ідентифікатор зустрічі {$a}';
$string['waitingroom'] = 'Кімната очікування';
$string['waitingroomenable'] = 'Увімкнути кімнату очікування';
$string['webinar'] = 'Вебінар';
$string['webinar_already_false'] = '<p><b>Цей модуль уже встановлено як зустріч, а не як вебінар. Ви не можете вимкнути це налаштування після створення зустрічі.</b></p>';
$string['webinar_already_true'] = '<p><b>Цей модуль уже встановлено як вебінар, а не як зустріч. Ви не можете вимкнути це налаштування після створення вебінару.</b></p>';
$string['webinar_alwaysshow'] = 'Завжди показувати опцію вебінару незалежно від того, чи має користувач ліцензію на проведення вебінарів';
$string['webinar_by_default'] = 'Вебінар за замовчуванням';
$string['webinar_by_default_desc'] = 'Типово створює екземпляр зустрічі Zoom як вебінар.';
$string['webinar_desc'] = 'За допомогою цього параметра ви можете контролювати, чи показуватиметься опція створення вебінару користувачам під час створення зустрічі чи ні. Це налаштування впливає лише на налаштування екземпляра діяльності Moodle. Навіть якщо ви вирішите завжди показувати опцію, користувачеві все одно знадобиться дійсна ліцензія на вебінари, щоб врешті провести вебінар.';
$string['webinar_disable'] = 'Вимкнути вебінари';
$string['webinar_help'] = 'Вебінари дають організаторам розширений контроль і гнучкість для проведення зустрічей з більшою аудиторією. Ця опція доступна лише для попередньо авторизованих облікових записів Zoom.';
$string['webinar_showonlyiflicense'] = 'Показувати опцію вебінарів, лише якщо користувач має ліцензію на проведення вебінарів';
$string['webinarthisis'] = 'Це вебінар';
$string['week'] = 'Тижнів';
$string['weekoption_first'] = 'Перший';
$string['weekoption_fourth'] = 'Четвертий';
$string['weekoption_last'] = 'Останній';
$string['weekoption_second'] = 'Другий';
$string['weekoption_third'] = 'Третій';
$string['zoom:addinstance'] = 'Додавати нову зустріч Zoom';
$string['zoom:eligiblealternativehost'] = 'Можна вибрати як альтернативного організатора під час зустрічей Zoom';
$string['zoom:refreshsessions'] = 'Оновлювати звіти про зустріч Zoom';
$string['zoom:view'] = 'Бачити зустрічі Zoom';
$string['zoom:viewdialin'] = 'Бачити інформацію про підключення до Zoom';
$string['zoom:viewjoinurl'] = 'Бачити URL-адресу приєднання до Zoom';
$string['zoomerr'] = 'Із Zoom сталася помилка.';
$string['zoomerr_alternativehostusernotfound'] = 'Користувача {$a} не знайдено в Zoom.';
$string['zoomerr_apilimit'] = 'Досягнуто максимального добового ліміту для цього API. Повторіть спробу о {$a}.';
$string['zoomerr_id_missing'] = 'Ви повинні вказати ідентифікатор course_module або ідентифікатор екземпляра';
$string['zoomerr_licensesnumber_missing'] = 'Налаштування максимального масштабу знайдено, але налаштування номера ліцензій не знайдено';
$string['zoomerr_maxretries'] = 'Здійснено {$a->maxretries} спроб здійснити виклик, але не вдалося: {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Цю зустріч неможливо знайти в Zoom. Ви можете <a href="{$a->recreate}">перестворити її тут</a> або <a href="{$a->delete}">видалити її повністю</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Цю зустріч неможливо знайти в Zoom. Якщо у вас є запитання, зв’яжіться з організатором зустрічі.';
$string['zoomerr_usernotfound'] = 'Не вдалося знайти ваш обліковий запис у Zoom. Якщо ви використовуєте Zoom вперше, вам потрібно активувати свій обліковий запис Zoom, увійшовши в систему <a href="{$a}" target="_blank">{$a}</a>. Після того, як ви активуєте свій обліковий запис Zoom, перезавантажте цю сторінку та продовжте налаштування зустрічі. Також переконайтеся, що ваша електронна адреса в Zoom збігається з електронною адресою в цій системі.';
$string['zoomerr_viewrecordings_off'] = 'Перегляд записів вимкнено, завдання неможливо запустити';
$string['zoomurl'] = 'URL домашньої сторінки Zoom';
