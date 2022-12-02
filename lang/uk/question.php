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
 * Strings for component 'question', language 'uk', version '3.8'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Дія';
$string['addanotherhint'] = 'Додати ще підказку';
$string['addcategory'] = 'Додати категорію';
$string['addmorechoiceblanks'] = 'Додати ще {no} варіант(и) відповіді';
$string['adminreport'] = 'Звіт про можливі проблеми в банку питань';
$string['advancedsearchoptions'] = 'Параметри пошуку';
$string['alltries'] = 'Всі спроби';
$string['answer'] = 'Відповідь';
$string['answers'] = 'Відповіді';
$string['answersaved'] = 'Відповідь збережено';
$string['attemptfinished'] = 'Спробу завершено';
$string['attemptfinishedsubmitting'] = 'Відповідь відправлено';
$string['attemptoptions'] = 'Параметри спроби';
$string['availableq'] = 'Доступно?';
$string['badbase'] = 'Помилка бази перед **: {$a}**';
$string['behaviour'] = 'Поведінка';
$string['behaviourbeingused'] = 'Використовується поведінка: {$a}';
$string['broken'] = 'Це "битий зв\'язок", вказує на не існуючий файл.';
$string['byandon'] = '<em>{$a->user}</em>, <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Не копіюється резервний файл';
$string['cannotcreate'] = 'Не створюється новий запис в таблиці question_attempts';
$string['cannotcreatepath'] = 'Не створюється шлях: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Ви не можете видалити поведінку \'{$a}\'. Вона використовується у питаннях, для яких є спроби.';
$string['cannotdeletecate'] = 'Ви не можете видалити цю категорію, оскільки вона є стандартною категорією для цього контексту.';
$string['cannotdeleteneededbehaviour'] = 'Не вдається видалити поведінку питання  \'{$a}\'. Є інші встановлені поведінки, які базуються на ній.';
$string['cannotdeleteqtypeinuse'] = 'Ви не можете видалити відсутній тип питання \'{$a}\'. Питання цього типу є у Банку питань.';
$string['cannotdeleteqtypeneeded'] = 'Ви не можете видалити відсутній тип питання \'{$a}\'.  Є інші встановлені типи питань, які базуються на ньому.';
$string['cannotdeletetopcat'] = 'Найпопулярніші категорії не можна видалити.';
$string['cannotedittopcat'] = 'Найпопулярніші категорії не можна редагувати.';
$string['cannotenable'] = 'Тип питання {$a} не може бути створений напряму.';
$string['cannotenablebehaviour'] = 'Поведінка питання {$a} не може бути використана безпосередньо. Це тільки для внутрішнього використання.';
$string['cannotfindcate'] = 'Не знаходиться запис категорії';
$string['cannotfindquestionfile'] = 'Не знаходиться файл даних питання в форматі zip';
$string['cannotgetdsfordependent'] = 'Не вдається отримати специфічні дані для даних залежного питання! (question:{$a->id}, набір даних елементу:{$a->item})';
$string['cannotgetdsforquestion'] = 'Не вдається отримати специфічні дані для даних розрахункового питання! (question: {$a})';
$string['cannothidequestion'] = 'Не вдалося приховати питання';
$string['cannotimportformat'] = 'Вибачте, імпорт цього формату ще не реалізовано!';
$string['cannotinsertquestion'] = 'Не вдається додати нове запитання!';
$string['cannotinsertquestioncatecontext'] = 'Не вдається додати нову категорію запитань {$a->cat} при неправильному коді контексту {$a->ctx}';
$string['cannotloadquestion'] = 'Не завантажується питання';
$string['cannotmovequestion'] = 'Ви не можете використовувати цей скрипт для переміщення питань, які мають файли пов\'язані з ним з різних областей.';
$string['cannotopenforwriting'] = 'Не відкривається для запису: {$a}';
$string['cannotpreview'] = 'Ви не можете переглядати це питання!';
$string['cannotread'] = 'Не вдається прочитати файл імпорту (або ж файл порожній)';
$string['cannotretrieveqcat'] = 'Не вдалося отримати питання категорії';
$string['cannotunhidequestion'] = 'Не вдалося показати питання.';
$string['cannotunzip'] = 'Не вдалося розпакувати файл.';
$string['cannotwriteto'] = 'Не вдалося записати експортовані питання до {$a}';
$string['categories'] = 'Категорії';
$string['category'] = 'Категорія';
$string['categorycurrent'] = 'Поточна категорія';
$string['categorycurrentuse'] = 'Використати цю категорію';
$string['categorydoesnotexist'] = 'Ця категорія не існує';
$string['categoryinfo'] = 'Інформація про категорію';
$string['categorymove'] = 'Категорія \'{$a->name}\' містить питань - {$a->count} (деякі з яких можуть бути приховані або випадкові питання, які все ще використовуються у тесті).  Виберіть категорію, у яку їх перемістити';
$string['categorymoveto'] = 'Зберегти в категорії';
$string['categorynamecantbeblank'] = 'Назва категорії не може бути порожньої.';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Змінити параметри';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">Категорія "{$a->name}"</a> в курсі "{$a->coursename}" матиме відкритий статус змінений від <strong>{$a->changefrom} до {$a->changeto}</strong>.';
$string['check'] = 'Перевірити';
$string['chooseqtypetoadd'] = 'Виберіть тип питання';
$string['clearwrongparts'] = 'Вилучити неправильні відповіді';
$string['clickflag'] = 'Відмітити питання';
$string['clicktoflag'] = 'Відмітити це питання для майбутнього посилання';
$string['clicktounflag'] = 'Видалити флаг';
$string['clickunflag'] = 'Видалити флаг';
$string['closepreview'] = 'Закрити попередній перегляд';
$string['combinedfeedback'] = 'Комбінований коментар';
$string['comment'] = 'Коментар';
$string['commented'] = 'Коментовано: {$a}';
$string['commentormark'] = 'Зробити коментар або змінити оцінку';
$string['comments'] = 'Коментарі';
$string['commentx'] = 'Коментар: {$a}';
$string['complete'] = 'Завершено';
$string['contexterror'] = 'Ви не повинні потрапляти сюди, якщо ви не рухаєте категорію до іншого контексту.';
$string['copy'] = 'Копіювати з {$a} та змінити посилання.';
$string['correct'] = 'Правильно';
$string['correctfeedback'] = 'Для будь-якої правильної відповіді';
$string['correctfeedbackdefault'] = 'Ваша відповідь правильна.';
$string['created'] = 'Створено';
$string['createdby'] = 'Створив';
$string['createdmodifiedheader'] = 'Створення / Останнє збереження';
$string['createnewquestion'] = 'Створити нове питання ...';
$string['cwrqpfs'] = 'Випадкові питання відібрані з підкатегорій.';
$string['cwrqpfsinfo'] = '<p>В процесі модернізації до Moodle 1.9 ми розділили категорії питань в різний контекст. Деякі категорії питань та питання повинні змінити свій статус відкритості. Це потрібно в деяких випадках, коли одне або більше випадкових питань в тесті встановлені на вибір з комплексу відкритих та закритих категорій (які є на цьому сайті). Це трапляється, коли випадкове питання встановлене на вибір з субкатегорії та одна або більше підкатегорій мають відмінний статус з батьківською категорією.</p><p> Наступні категорії змінять свій відкритий статус. Питання задіяні в тестах будуть продовжувати працювати поки ви їх не видалите з цих тестів.</p>';
$string['cwrqpfsnoprob'] = 'Жодного питання не задіяно з категорії \'Випадкові питання відібрані з підкатегорій\'';
$string['decimalplacesingrades'] = 'Десяткових знаків в оцінці';
$string['defaultfor'] = 'Типове для {$a}';
$string['defaultinfofor'] = 'Типова категорія для питань пов’язана з контекстом \'{$a}\'.';
$string['defaultmark'] = 'Типова оцінка';
$string['defaultmarkmustbepositive'] = 'Типовий бал повинен бути позитивним';
$string['deletecoursecategorywithquestions'] = 'В банку питань є питання пов’язані з категорією даного курсу. Якщо ви продовжите, то вони будуть видалені. Вам потрібно спочатку перемістити їх до іншої категорії використовуючи інтерфейс банку даних.';
$string['deletequestioncheck'] = 'Ви абсолютно впевнені, що хочете видалити \'{$a}\'?';
$string['deletequestionscheck'] = 'Ви абсолютно впевнені, що хочете видалити такі питання?<br /><br />{$a}';
$string['deletingbehaviour'] = 'Видалення поведінки питання \'{$a}\'';
$string['deletingqtype'] = 'Видалення типу питання \'{$a}\'';
$string['didnotmatchanyanswer'] = '[Не знайдено жодної відповіді]';
$string['disabled'] = 'Відключено';
$string['displayoptions'] = 'Показати опції';
$string['disterror'] = 'Виникли проблеми з розподілом типу {$a}';
$string['donothing'] = 'Не копіювати або видаляти файли чи міняти зв\'язки.';
$string['editcategories'] = 'Редагування категорій';
$string['editcategories_help'] = 'Замість того, щоб тримати все в одному великому списку, питання можуть бути організовані по категоріях і підкатегоріях.

Кожна категорія має контекст, який визначає, де питання категорії можуть бути використані:

* Контекст діяльності - питання доступні тільки в контексті діяльності
* Контекст курсу - питання доступні для всіх модулів, в курсі
* Контекст категорії курсів - питання доступні для всіх модулів діяльності в курсах однієї категорії
* Контекст система - Питання доступні у всіх курсах та діяльностях на сайті

Категорії також використовуються для випадкових питань, коли потрібно відібрати частину питань з певної категорії.';
$string['editcategory'] = 'Редагувати категорію';
$string['editingcategory'] = 'Редагування категорії';
$string['editingquestion'] = 'Редагування питання';
$string['editquestion'] = 'Редагувати питання';
$string['editquestions'] = 'Редагувати питання';
$string['editthiscategory'] = 'Редагувати цю категорію';
$string['emptyxml'] = 'Незрозуміла помилка - порожній imsmanifest.xml';
$string['enabled'] = 'Увімкнено';
$string['erroraccessingcontext'] = 'Немає доступу до контексту';
$string['errordeletingquestionsfromcategory'] = 'Помилка видалення питань з категорії {$a}.';
$string['errorduringpost'] = 'Сталася помилка при пост-обробці!';
$string['errorduringpre'] = 'Сталася помилка під час попередньої обробки!';
$string['errorduringproc'] = 'Помилка виникла під час обробки';
$string['errorduringregrade'] = 'Не вдалося переоцінити питання {$a->qid}, переходимо в стан {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Помилка: не можливо скопіювати файл {$a}.';
$string['errorfilecannotbemoved'] = 'Помилка: не можливо перемістити файл {$a}.';
$string['errorfileschanged'] = 'Помилка: файлові зв\'язки від питань, які були змінені, поки показувалася форма.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Запитання ({$a}) з’являється більше одного разу з різною вагою в різних позиціях тесту. Наразі це не підтримується статистичним звітом і може зробити статистичні дані для цього питання ненадійними.';
$string['errormanualgradeoutofrange'] = 'Оцінка {$a->grade} не в межах від 0 до {$a->maxgrade} для питання {$a->name}. Оцінка та коментар не збережені.';
$string['errormovingquestions'] = 'Помилка переміщення питань із кодами {$a}.';
$string['errorpostprocess'] = 'Сталася помилка при пост-обробці!';
$string['errorpreprocess'] = 'Сталася помилка під час попередньої обробки!';
$string['errorprocess'] = 'Сталася помилка під час обробки!';
$string['errorprocessingresponses'] = 'Виникла помилка в процесі обробки вашої відповіді ({$a}). Натисніть продовжити для повернення на сторінку де ви були та спробуйте ще раз.';
$string['errorsavingcomment'] = 'Помилка збереження в базі даних коментаря до питання {$a->name}.';
$string['errorsavingflags'] = 'Помилка при збереженні стану прапорця.';
$string['errorupdatingattempt'] = 'Помилка оновлення в базі даних спроби {$a->id}.';
$string['eventquestioncategorycreated'] = 'Створено категорію питань';
$string['eventquestioncategorydeleted'] = 'Категорію запитання видалено';
$string['eventquestioncategorymoved'] = 'Категорію запитання переміщено';
$string['eventquestioncategoryupdated'] = 'Категорію запитання оновлено';
$string['eventquestioncategoryviewed'] = 'Переглянуто категорію запитання';
$string['eventquestioncreated'] = 'Питання створено';
$string['eventquestiondeleted'] = 'Питання видалено';
$string['eventquestionmoved'] = 'Питання переміщено';
$string['eventquestionsexported'] = 'Запитання експортовано';
$string['eventquestionsimported'] = 'Імпортовані запитання';
$string['eventquestionupdated'] = 'Питання оновлено';
$string['eventquestionviewed'] = 'Питання переглянуто';
$string['export'] = 'Експорт';
$string['exportasxml'] = 'Експортувати як Moodle XML';
$string['exportcategory'] = 'Експортувати категорію';
$string['exportcategory_help'] = 'Цей параметр визначає категорію, в яку будуть експортуватися прийняті питання.

Деякі формати імпорту, такі, як GIFT і Moodle XML, дозволяють категорії і контекст даних, які будуть включені у файл експорту, що дозволяє їм (опційно) бути відтвореними при імпорті. При необхідності, відповідні прапорці повинні бути встановлені.';
$string['exporterror'] = 'Помилка виникла під час експорту!';
$string['exportfilename'] = 'питання';
$string['exportnameformat'] = '%d%m%Y-%H%M';
$string['exportonequestion'] = 'Завантажте це запитання у форматі Moodle XML';
$string['exportquestions'] = 'Експорт питань у файл';
$string['exportquestions_help'] = 'Ця функція дозволяє експорт всієї категорії (і будь-яких підкатегорій) питань у файл. Зверніть увагу, що, залежно від вибраного формату файлу, деякі дані питання і деякі типи питання можуть бути не експортовані.';
$string['feedback'] = 'Коментар';
$string['filecantmovefrom'] = 'Файли питань не можуть бути переміщеними, оскільки ви не маєте права видаленя з того місця, звідки ви намагаєтеся перемістити.';
$string['filecantmoveto'] = 'Файли питань не можуть бути переміщеними або скопійованими, оскільки ви не маєте права писати файли туди, куди ви збираєтеся їх переміщувати.';
$string['fileformat'] = 'Формат файлу';
$string['filesareacourse'] = 'файли курсу';
$string['filesareasite'] = 'файли сайту';
$string['filestomove'] = 'Перемістити/Копіювати файли до {$a}?';
$string['fillincorrect'] = 'Показати правильні відповіді';
$string['filterbytags'] = 'Фільтр по тегам...';
$string['firsttry'] = 'Перша спроба';
$string['flagged'] = 'Помічене';
$string['flagthisquestion'] = 'Відмітити це питання';
$string['formquestionnotinids'] = 'Форма вміщує питання, що не в коді питань';
$string['fractionsnomax'] = 'Щоб правильно оцінити це питання, один з варіантів відповідей повинен бути визначений як 100%.';
$string['generalfeedback'] = 'Загальний коментар';
$string['generalfeedback_help'] = 'Загальний коментар показується студентам відразу після проходження спроби. На відміну від коментарів до типу питання або типу відповіді студента, загальний коментар показується всім студентам.

Ви можете використати загальний коментар для підказки студентам інформації про базові знання з теми тестування, або надати пояснення, якщо студенти не зрозуміли типу питання.';
$string['getcategoryfromfile'] = 'Отримати категорію з файлу';
$string['getcontextfromfile'] = 'Отримати контекст з файлу';
$string['hintn'] = 'Підказка {no}';
$string['hintnoptions'] = 'Опції підказки {no}';
$string['hinttext'] = 'Текст підказки';
$string['howquestionsbehave'] = 'Яка поведінка питання';
$string['howquestionsbehave_help'] = 'Студенти можуть взаємодіяти з питаннями тесту різними способами. Наприклад, студенти повинні дати відповідь на кожне питання без отримання оцінки та коментаря, а потім вони побачать результати всього тесту. Це буде режим "Відкладеного коментаря". І, альтернативно, студенти, відповівши на кожне питання, відразу отримують коментар і, якщо вони з першого разу відповіли неправильно, то відразу отримують право на повторну спробу з можливістю отримання меншої оцінки. Це режим "Інтерактивно за кількома спробами". Це, мабуть, два найбільш часто використовуваних режимів поведінки запитань.';
$string['idnumber'] = 'ID номер';
$string['idnumber_help'] = 'Якщо використовується, ідентифікаційний номер має бути унікальним у кожній категорії запитання. Він надає інший спосіб визначення запитання, який іноді корисний, але зазвичай його можна залишити порожнім.';
$string['ignorebroken'] = 'Ігнорувати биті зв’язки';
$string['import'] = 'Імпорт';
$string['importcategory'] = 'Імпортувати у категорію';
$string['importcategory_help'] = 'Цей параметр визначає категорію, до якої будуть імпортовані питання. Певні формати, такі як GIFT та Moodle XML, можуть містити у файлі імпорту інформацію про категорії питань та відповідні контекстні дані. Щоб використати ці дані, а не обрану категорію, увімкніть відповідні галочки під назвою категорії. Якщо категорії, що містяться у файлі імпорту, не існують, вони будуть створені у системі.';
$string['importerror'] = 'Виникла помилка в процесі імпорту';
$string['importerrorquestion'] = 'Помилка імпорту питання';
$string['importfromcoursefiles'] = '... або виберіть файл курсу для імпорту.';
$string['importfromupload'] = 'Виберіть файл для завантаження...';
$string['importingquestions'] = 'Імпортування {$a} питань з файлу';
$string['importparseerror'] = 'Помилка(и) при розборі файлу імпорту. Ніяких питань не імпортовано. Для імпортування всіх допустимих питань з файлу імпорту, повторіть спробу встановивши параметр ’Зупиняти на помилці’ в ’Ні’.';
$string['importquestions'] = 'Імпорт питань з файлу';
$string['importquestions_help'] = 'Ця функція дозволяє питання в різних форматах для імпорту за допомогою текстового файлу. Зверніть увагу, що у файлі необхідно використовувати кодування UTF-8.';
$string['importwrongfiletype'] = 'Тип вказаного вами файлу ({$a->actualtype}) не відповідає потрібному типу файлів для імпорту ({$a->expectedtype}).';
$string['impossiblechar'] = 'Виявлено неможливий символ {$a} як символ дужки';
$string['includesubcategories'] = 'Також показувати питання з підкатегорій';
$string['incorrect'] = 'Неправильно';
$string['incorrectfeedback'] = 'Для будь-якої неправильної відповіді';
$string['incorrectfeedbackdefault'] = 'Ваша відповідь неправильна.';
$string['information'] = 'Інформація';
$string['invalidanswer'] = 'Неповна відповідь';
$string['invalidarg'] = 'Отримано неправильні аргументи або сервер налаштовано неправильно';
$string['invalidcategoryidforparent'] = 'Неправильний код категорії для батьківської!';
$string['invalidcategoryidtomove'] = 'Неправильний код категорії для переміщення!';
$string['invalidconfirm'] = 'Підтвердження рядка було неправильне';
$string['invalidcontextinhasanyquestions'] = 'Неправильний контекст надійшов до функції question_context_has_any_questions.';
$string['invalidgrade'] = 'Оцінки ({$a}) не відповідають опціям оцінювання - питання пропущено.';
$string['invalidpenalty'] = 'Неправильний штраф';
$string['invalidwizardpage'] = 'Неправильна або не визначена сторінка майстра!';
$string['lastmodifiedby'] = 'Виправив останнім';
$string['lasttry'] = 'Остання спроба';
$string['linkedfiledoesntexist'] = 'Зв\'язаного файлу {$a} не існує';
$string['makechildof'] = 'Створити нащадка від \'{$a}\'';
$string['makecopy'] = 'Зробити копію';
$string['maketoplevelitem'] = 'Перемістити на верхній рівень';
$string['manualgradeinvalidformat'] = 'Це некоректне число.';
$string['manualgradeoutofrange'] = 'Ця оцінка поза межами можливого діапазону.';
$string['manuallygraded'] = 'Ручна оцінка {$a->mark} з коментарем: {$a->comment}';
$string['mark'] = 'Оцінка';
$string['markedoutof'] = 'Оцінка в межах';
$string['markedoutofmax'] = 'Макс. оцінка до {$a}';
$string['markoutofmax'] = 'Балів {$a->mark} з {$a->max}';
$string['marks'] = 'Оцінки';
$string['matchgrades'] = 'Відповідність оцінок';
$string['matchgrades_help'] = 'Імпортовані оцінки повинні відповідати одному з фіксованих у списку допустимих оцінок - 100, 90, 80, 75, 70, 66,666, 60, 50, 40, 33,333, 30, 25, 20, 16,666, 14,2857, 12,5, 11,111, 10, 5 , 0 (а також негативні значення). Якщо ж цього не має, то є два варіанти:

* Помилка - Якщо питання містить будь-які оцінки не знайдений в списку, виводиться повідомлення про помилку і це питання не буде імпортовано
* Найближча оцінка - Якщо питання містить будь-які оцінки не знайдений в списку, виводиться найближче відповідне значення в списку';
$string['matchgradeserror'] = 'Помилка, якщо оцінки немає у списку';
$string['matchgradesnearest'] = 'Використовувати найближчу, якщо оцінка не у списку';
$string['missingcourseorcmid'] = 'Необхідно забезпечити courseid або cmid для print_question.';
$string['missingcourseorcmidtolink'] = 'Необхідно забезпечити courseid або cmid для get_question_edit_link.';
$string['missingimportantcode'] = 'Для даного типу питання не вистачає важливої частини коду: {$a}.';
$string['missingoption'] = 'У закритому питання {$a} відсутні варіанти';
$string['modified'] = 'Останнє збереження';
$string['move'] = 'Перемістити з {$a} та змінити зв\'язки';
$string['movecategory'] = 'Перемістити категорію';
$string['movedquestionsandcategories'] = 'Переміщено питання та категорії з <b>{$a->oldplace}</b> до <b>{$a->newplace}</b>.';
$string['movelinksonly'] = 'Просто вкажіть, куди вказують зв’язок, не видаляйте та не копіюйте файлів.';
$string['moveq'] = 'Перемістити питання';
$string['moveqtoanothercontext'] = 'Перемістити питання до іншого контексту';
$string['moveto'] = 'Перемістити в >>';
$string['movingcategory'] = 'Переміщення категорії';
$string['movingcategoryandfiles'] = 'Ви впевнені, що бажаєте перемістити категорію {$a->name} та всі підкатегорії до контексту "{$a->contextto}"?<br /> Виявлено {$a->urlcount} зв\'язків до файлу(ів) з питань в {$a->fromareaname}, чи бажаєте ви скопіювати чи перемістити їх до {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Ви впевнені, що хочете перемістити категорію "{$a->name}" та всі підкатегорії до контексту "{$a->contextto}"?';
$string['movingquestions'] = 'Переміщення питань та файлів';
$string['movingquestionsandfiles'] = 'Ви впевнені, що хочете перемістити питання {$a->questions} до контексту <strong>"{$a->tocontext}"</strong>?<br /> Виявлено <strong>{$a->urlcount} файлів </strong> зв\'язаних з цих питань з {$a->fromareaname}, ви бажаєте копіювати чи переміщувати їх до {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Ви впевнені, що хочете перемістити питання {$a->questions} до контексту <strong>"{$a->tocontext}"</strong>?<br /> <strong>Немає</strong> зв\'язаних файлів з цих питань в {$a->fromareaname}.';
$string['needtochoosecat'] = 'Вам потрібно змінити категорію для переміщення цього питання або натиснути \'Відмінити\'.';
$string['nocate'] = 'Немає категорії {$a}!';
$string['nopermissionadd'] = 'Ви не маєте прав для додавання сюди питань.';
$string['nopermissionmove'] = 'У вас немає прав переміщувати це питання в іншу категорію. Ви повинні зберегти питання в цю категорію або зберегти його як нове питання.';
$string['noprobs'] = 'Проблем в банку питань не виявлено.';
$string['noquestions'] = 'Не знайдено жодного питання для експорту. Переконайтеся, що ви вибрали категорію для експорту, яка містить питання.';
$string['noquestionsinfile'] = 'Немає питань у файлі імпорту';
$string['noresponse'] = '[без відповіді]';
$string['notagfiltersapplied'] = 'Фільтри тегів не застосовувалися';
$string['notanswered'] = 'Відповіді не було';
$string['notchanged'] = 'Не змінювалося від останньої спроби';
$string['notenoughanswers'] = 'Цей тип питання вимагає як мінімум {$a} відповідей';
$string['notenoughdatatoeditaquestion'] = 'Не визначено ні код питання, ні тип питання, ні код категорії.';
$string['notenoughdatatomovequestions'] = 'Ви повинні забезпечити код для питань, які ви збираєтеся перемістити.';
$string['notflagged'] = 'Не помічено';
$string['notgraded'] = 'Не оцінено';
$string['notshown'] = 'Не показувати';
$string['notyetanswered'] = 'Відповіді ще не було';
$string['notyourpreview'] = 'Цей перегляд не для вас';
$string['novirtualquestiontype'] = 'Немає віртуального типу питань для типу питань {$a}';
$string['numqas'] = 'Кількість спроб на питання';
$string['numquestions'] = 'Кількість питань';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} схованих)';
$string['options'] = 'Параметри';
$string['page-question-category'] = 'Сторінка категорії питань';
$string['page-question-edit'] = 'Сторінка редагування питань';
$string['page-question-export'] = 'Сторінка експортування питань';
$string['page-question-import'] = 'Сторінка імпортування питань';
$string['page-question-x'] = 'Будь-яка сторінка питань';
$string['parent'] = 'Батьківська';
$string['parentcategory'] = 'Входить у категорію';
$string['parentcategory_help'] = 'Батьківська категорія є тією, в якій нова категорія буде розміщений. "Верхній рівень" означає, що ця категорія не міститься ні в якій іншій категорії. Категорії контекстів виділені жирним шрифтом. В кожній такій категорії повинна бути, принаймні, одна типова категорія.';
$string['parenthesisinproperclose'] = 'Дужка перед ** не закрита в {$a}**';
$string['parenthesisinproperstart'] = 'Дужка перед ** не відкрита в {$a}**';
$string['parsingquestions'] = 'Розбір питань з файлу імпорту.';
$string['partiallycorrect'] = 'Частково правильно';
$string['partiallycorrectfeedback'] = 'Для кожної частково правильної відповіді';
$string['partiallycorrectfeedbackdefault'] = 'Ваша відповідь частково правильна.';
$string['penaltyfactor'] = 'Фактор штрафу';
$string['penaltyfactor_help'] = 'За допомогою цієї опції ви можете визначити, яка кількість штрафних балів буде нарахована за спробу з неправильною відповіддю. При підрахунку остаточного результату за завдання штрафні бали будуть відраховані від балів правильної відповіді. Це буде спрацьовувати тільки, якщо тест в навчальному режимі.

Розмір штрафу - число у інтервалі між 0 та 1. Якщо буде встановлено 0, то студент може робити безліч спроб без нарахування штрафних балів, а якщо 1 - буде тільки одна спроба для отримання позитивної оцінки.';
$string['penaltyforeachincorrecttry'] = 'Штраф за кожну неправильну спробу';
$string['penaltyforeachincorrecttry_help'] = 'Коли запитання запускаються з використанням поведінки «Інтерактивний із кількома спробами» або «Адаптивний режим», так що учень має кілька спроб правильно відповісти на запитання, тоді цей параметр контролює розмір штрафу за кожну неправильну спробу.

Штраф є пропорцією від загальної оцінки запитання, тож якщо запитання оцінюється в три бали, а штраф становить 0,3333333, тоді учень отримає 3 бали, якщо він правильно відповість на запитання з першого разу, 2, якщо правильно відповість із другої спроби, і 1 з них вдається правильно з третьої спроби.

Для деяких питань із кількох частин ця логіка оцінки застосовується окремо до кожної частини запитання. Деталі залежать від типу запитання і можуть бути складними, але принцип полягає в тому, щоб якомога справедливіше віддати учням оцінку за знання, які вони продемонстрували.';
$string['permissionedit'] = 'Редагувати це питання';
$string['permissionmove'] = 'Переміщати це питання';
$string['permissionsaveasnew'] = 'Зберігати це як нове питання';
$string['permissionto'] = 'Ви маєте дозвіл:';
$string['previewquestion'] = 'Попередній перегляд: {$a}';
$string['privacy:metadata:database:question'] = 'Деталі щодо конкретного питання.';
$string['privacy:metadata:database:question:createdby'] = 'Особа, яка створила запитання.';
$string['privacy:metadata:database:question:generalfeedback'] = 'Загальний відгук на це питання.';
$string['privacy:metadata:database:question:modifiedby'] = 'Особа, яка востаннє оновлювала запитання.';
$string['privacy:metadata:database:question:name'] = 'Назва питання.';
$string['privacy:metadata:database:question:questiontext'] = 'Текст запитання.';
$string['privacy:metadata:database:question:timecreated'] = 'Дата й час створення цього запитання.';
$string['privacy:metadata:database:question:timemodified'] = 'Дата та час оновлення цього питання.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'Кроки спроби запитання можуть містити додаткові дані, характерні для цього кроку. Дані зберігаються в таблиці step_data.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'Ім\'я елемента даних.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'Значення елемента даних.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Кожна спроба запитання має ряд кроків, щоб вказати різні фази від початку до завершення і оцінки. У цій таблиці зберігається інформація для кожного з цих кроків.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'Оцінка, яку було присвоєно цій спробі запитання, збільшено до значення з 1.';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'Стан цього питання крок спроби в кінці кроку переходу.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'Дата й час початку цього крокового переходу.';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'Користувач, який здійснив покроковий перехід.';
$string['privacy:metadata:database:question_attempts'] = 'Інформація про спробу конкретного запитання.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Ознака того, що користувач позначив це питання під час спроби.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Підсумок відповіді на запитання.';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'Час оновлення спроби запитання.';
$string['privacy:metadata:link:qbehaviour'] = 'Підсистема Question використовує тип плагіна Question Behavior.';
$string['privacy:metadata:link:qformat'] = 'Підсистема Question використовує тип плагіна Question Format для імпорту та експорту запитань у різних форматах.';
$string['privacy:metadata:link:qtype'] = 'Підсистема Question взаємодіє з типом плагіна Question Type, який містить різні типи питань.';
$string['published'] = 'відкрито';
$string['qtypeveryshort'] = 'Т';
$string['questionaffected'] = '<a href="{$a->qurl}">Питання "{$a->name}" ({$a->qtype})</a> знаходиться в цій категорії, але також використовується в <a href="{$a->qurl}">тесті "{$a->quizname}"</a> в іншому курсі "{$a->coursename}".';
$string['questionbank'] = 'Банк питань';
$string['questionbehaviouradminsetting'] = 'Налаштування поведінки питання';
$string['questionbehavioursdisabled'] = 'Відключити поведінку питань';
$string['questionbehavioursdisabledexplained'] = 'Введіть розділений комами список поведінки, яку ви не хочете відображати у спадному меню.';
$string['questionbehavioursorder'] = 'Порядок поведінки питань';
$string['questionbehavioursorderexplained'] = 'Введіть розділений комами список поведінки в тому порядку, у якому вони мають відображатися у спадному меню.';
$string['questioncategory'] = 'Категорія питань';
$string['questioncatsfor'] = 'Категорії питань для \'{$a}';
$string['questiondoesnotexist'] = 'Це питання не створено';
$string['questionformtagheader'] = '{$a} тегів';
$string['questionidmismatch'] = 'Невідповідність кодів питання';
$string['questionname'] = 'Коротке означення питання';
$string['questionnamecopy'] = '{$a} (копія)';
$string['questionno'] = 'Питання {$a}';
$string['questionpreviewdefaults'] = 'Типові налаштування попереднього перегляду питання';
$string['questionpreviewdefaults_desc'] = 'Ці типові налаштування використовуються тоді, коли користувач вперше переглядає питання у банку питань. Після того, як користувач переглянув питання, його особисті уподобання зберігаються у вигляді налаштувань користувача.';
$string['questions'] = 'Питання';
$string['questionsaveerror'] = 'Сталася помилка в процесі збереження питання - ({$a})';
$string['questionsinuse'] = '(* Запитання, позначені зірочкою, десь використовуються, наприклад, у тесті. Тому, якщо ви продовжите, ці запитання насправді не будуть видалені, вони просто будуть приховані.)';
$string['questionsmovedto'] = 'Переміщено до "{$a}" в батьківську категорію курсу, але питання все ще використовуються.';
$string['questionsrescuedfrom'] = 'Питання збережено з контексту {$a}.';
$string['questionsrescuedfrominfo'] = 'Ці питання (деякі з них можуть бути схованими) збережено в контексті {$a}, який було видалено, але вони використовувалися в деяких тестах або інших діяльностях.';
$string['questiontags'] = 'Теги запитань';
$string['questiontext'] = 'Текст питання';
$string['questiontype'] = 'Тип питання';
$string['questionuse'] = 'Використати питання в цьому ресурсі';
$string['questionvariant'] = 'Варіант питання';
$string['questionx'] = 'Питання {$a}';
$string['requiresgrading'] = 'Потрібно оцінити';
$string['responsehistory'] = 'Історія відповідей';
$string['restart'] = 'Почати знову';
$string['restartwiththeseoptions'] = 'Почати знову з цими параметрами';
$string['restoremultipletopcats'] = 'Резервний файл містить більше однієї категорії запитань верхнього рівня для контексту {$a}.';
$string['reviewresponse'] = 'Огляд відповіді';
$string['rightanswer'] = 'Правильна відповідь';
$string['rightanswer_help'] = 'Автоматично згенерований підсумок правильної відповіді. Це може бути обмежено, тому ви можете розглянути можливість пояснити правильне рішення в загальному відгуку для запитання та вимкнути цю опцію.';
$string['save'] = 'Зберегти';
$string['savechangesandcontinueediting'] = 'Зберегти зміни та продовжити редагування';
$string['saved'] = 'Збережено: {$a}';
$string['saveflags'] = 'Зберегти стан поміток';
$string['selectacategory'] = 'Виберіть категорію:';
$string['selectaqtypefordescription'] = 'Виберіть тип питання, щоб побачити його опис.';
$string['selectcategoryabove'] = 'Виберіть категорію вище';
$string['selectquestionsforbulk'] = 'Виберіть питання для гуртових дій';
$string['settingsformultipletries'] = 'Декілька спроб';
$string['shareincontext'] = 'Відкрити в контексті для {$a}';
$string['showhidden'] = 'Показувати старі питання (що залишилися у тестах після видалення)';
$string['showmarkandmax'] = 'Показувати оцінку і максимум';
$string['showmaxmarkonly'] = 'Показувати тільки максимальну оцінку';
$string['shown'] = 'Показувати';
$string['shownumpartscorrect'] = 'Показати кількість правильних відповідей';
$string['shownumpartscorrectwhenfinished'] = 'Показати кількість правильних відповідей один раз після завершення питання';
$string['showquestiontext'] = 'Показувати текст питань у списку питань';
$string['specificfeedback'] = 'Коментарі для окремих питань';
$string['specificfeedback_help'] = 'Коментар, який залежить від того, яку відповідь дав студент.';
$string['started'] = 'Розпочато';
$string['state'] = 'Стан';
$string['step'] = 'Крок';
$string['steps'] = 'Сходинки';
$string['stoponerror'] = 'Зупинятися при помилці';
$string['stoponerror_help'] = 'Цей параметр визначає, чи буде процес імпорту припиняється, коли виявлена помилка, в результаті чого не буде питань, які імпортуються, або будь-які питання, які містять помилки ігноруватимуться, а будь-які допустимі питання імпортуватимуться.';
$string['submissionoutofsequence'] = 'Послідовний доступ. Будь ласка, не натискайте кнопку Назад під час проходження тесту.';
$string['submissionoutofsequencefriendlymessage'] = 'Ви вийшли за межі нормальної послідовності. Це може статися, якщо ви використовували у браузері кнопки назад або вперед, будь ласка, не користуйтеся цим під час тесту. Це також може статися, якщо ви натискаєте що-небудь, поки сторінка завантажується. Клацніть <strong>Продовжити</strong> для продовження.';
$string['submit'] = 'Перевірити';
$string['submitandfinish'] = 'Перевірити і закінчити';
$string['submitted'] = 'Перевірити: {$a}';
$string['tagarea_question'] = 'Запитання';
$string['technicalinfo'] = 'Технічна інформація';
$string['technicalinfo_help'] = 'Ця технічна інформація, ймовірно, має сенс тільки для розробників, що працюють над новими видами питань. Вона також може бути корисна при діагностуванні проблем з питаннями.';
$string['technicalinfomaxfraction'] = 'Максимальна частка: {$a}';
$string['technicalinfominfraction'] = 'Мінімальна частка: {$a}';
$string['technicalinfoquestionsummary'] = 'Текст питання: {$a}';
$string['technicalinforesponsesummary'] = 'Резюме відповіді: {$a}';
$string['technicalinforightsummary'] = 'Правильна відповідь: {$a}';
$string['technicalinfostate'] = 'Стан питання: {$a}';
$string['technicalinfovariant'] = 'Варіант запитання: {$a}';
$string['tofilecategory'] = 'Записувати категорію у файл';
$string['tofilecontext'] = 'Записувати контекст у файл';
$string['topfor'] = 'Верхній рівень для {$a}';
$string['uninstallbehaviour'] = 'Видалити цю поведінку питання.';
$string['uninstallqtype'] = 'Видалити цей тип питання.';
$string['unknown'] = 'Невідоме';
$string['unknownbehaviour'] = 'Невідома поведінка: {$a}.';
$string['unknownorunhandledtype'] = 'Невідомий або неопрацьований тип питання: {$a}';
$string['unknownquestion'] = 'Невідоме питання: {$a}.';
$string['unknownquestioncatregory'] = 'Невідома категорія питань: {$a}.';
$string['unknownquestiontype'] = 'Невідомий тип питання: : {$a}.';
$string['unknowntolerance'] = 'Невідомий тип допустимого відхилення {$a}';
$string['unpublished'] = 'закрито';
$string['unusedcategorydeleted'] = 'Цю категорію було видалено тому, що після видалення курсу ці питання більше ніде не використовувалися.';
$string['updatedisplayoptions'] = 'Оновити параметри показу';
$string['upgradeproblemcategoryloop'] = 'Виникла проблема під час модернізації категорій питань. В дереві категорій є зациклення. До таких належать категорії з кодом {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Не вдається оновити категорію питань {$a->name} ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Виникла проблема під час модернізації категорій питань. Категорія {$a->id} відноситься до категорії {$a->parent}, якої не існує.';
$string['whethercorrect'] = 'Чи відповідь правильна';
$string['whethercorrect_help'] = 'Передбачає текстовий опис \'Правильно\', \'Частково правильно\' або \'Неправильно\', а також кольорове підсвічування, яке надає таку ж інформацію.';
$string['whichtries'] = 'Які спроби';
$string['withselected'] = 'З вибраними';
$string['wrongprefix'] = 'Неправильно відформатовано префікс імені {$a}';
$string['xoutofmax'] = '{$a->mark} з {$a->max}';
$string['yougotnright'] = 'У вас правильних відповідей: {$a->num}.';
$string['youmustselectaqtype'] = 'Вам потрібно вибрати тип питання.';
$string['yourfileshoulddownload'] = 'Ваш файл експорту повинен почати завантажуватися найближчим часом. Якщо ні, будь ласка <a href="{$a}">натисніть тут</a>.';
