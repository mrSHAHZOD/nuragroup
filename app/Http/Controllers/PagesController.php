<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {

        if (isset($_COOKIE["lang"]))
            $lang = $_COOKIE["lang"];

        else
            $lang = 'uzs';

        session_start();

        if(!isset($_SESSION["lan"]))
            $_SESSION["lan"] = "uz";

        if(isset($_GET["lan"]))
            $_SESSION["lan"] = $_GET["lan"];

        $c = $_SESSION["lan"];


        $teams = DB::table('teams')->orderBy('id', 'desc')->get();

        $news = DB::table('news')->orderBy('id', 'desc')->paginate(4);

        if ($lang == 'rus') {

            $name_team = 'name_rus';
            $info_team = 'info_rus';

            $title_news = 'title_rus';

            $sc = 'скролить вниз';


            $menu = array(
                'brend' => 'Наши бренды',
                'haqimizda' => 'О нас',
                'raqam' => 'Nura в числах',
                'jamoa' => 'Наша команда',
                'mijoz' => 'Наши клиенты',
                'yangilik' => 'Новости',
                'kontakt' => 'Контакты',
            );

            $header = array(
                'title1' => 'одна из крупных компаний',
                'uzb' => 'в Узбекистане',
                'content1' => 'дистрибьютор ряда всемирно известных брендов в',
                'content2' => 'сфере электротехнического и осветительного оборудования',
            );

            $brend = array(
                'brendlar' => 'Наши бренды',
                'batafsil' => 'Подробнее',
                'qaytish' => 'Назад',
                'chint' => 'Компания CHINT, основанная в 1984
                    году, является ведущим мировым
                    поставщиком интеллектуальных
                    энергетических решений. Он активно внедряет промышленные секторы «4 + 1», включая интеллектуальную   электротехнику, экологически
                    чистую энергию, промышленное
                    управление и автоматизацию,
                    умный дом и инкубатор, формируя
                    интегрированную целую отраслевую цепочку «производство электроэнергии, хранение, передача,
                    подстанции, распределение, продажи и потребление. ». И он может
                    похвастаться разветвленной деловой сетью в более чем 140 странах и
                    регионах, а также более чем 30 000
                    сотрудников и годовой выручкой от
                    продаж более 11,4 миллиардов
                    долларов США. CHINT входит в
                    число 500 крупнейших компаний
                    Китая 18 лет подряд. Ее дочерняя
                    компания, CHINT Electrics, стала
                    первой компанией в Китае, основной бизнес которой - низковольтная
                    электроэнергетика, и попала в
                    список 50 крупнейших азиатских
                    компаний, торгующихся на рынке
                    акций.',
                'nura' => 'Nura Electric - одна из недавно
                    созданных компаний в электро`
                    энергетическом секторе Узбекистана в 2015 году, занимающая
                    местои положение на рынках
                    Узбекистана и мира.
                    В настоящее время основным
                    направлением деятельности
                    является производство и поставка на рынок Узбекистана более
                    350 наименований электротехнической продукции и аксессуаров.
                    Основная продукция Nura
                    Electric - это ассортименты осветительных приборов, розетка и
                    выключатели и их аксессуаров.
                    Продукция
                    полностью соответствует международным стандартам по качеству и дизайну и имеет собственный   сертификат соответстви',
                'redray' => 'REDRAY— молодая торговая
                    марка световых решений в
                    Узбекистане. REDRAY является
                    синонимом высококачественной, надежной, инновационной
                    техники, улучшающей жизнь
                    людей.
                    ООО “REDRAY” специализируется на оптовой продаже осветительных приборов, в частности светодиодных    ламп бытового и промышленного 			    назначения.
                    Основным партнером с китайской стороны является производственная компания RED100
                    (24 года на рынке осветительных приборов, 79 партнеров в
                    более чем 60 странах мира).
                    Первый опыт продаж на территории Узбекистана светодиодных ламп под брендом REDRAY
                    стартовал с 01.01.19, с первой
                    партии в 85.000 единиц.
                    В течение, 6 месяцев было',
                'nura_e' => 'СП ООО "NUR INVEST TEXNOLOGYA"
                    ведущий производитель и поставщик низковольтной аппаратуры, в
                    2011 году открыла новый завод в
                    городе Ташкенте по производству
                    энергосберегающих ламп под
                    торговой маркой " NURA Lights ".
                    Компания производит долговечные,
                    экономичные и безопасные источники света разных мощностей.
                    Желание клиентов является наивысшим приоритетом для нас. За
                    любым процессом в компании стоят
                    требование клиента, решая задачи,
                    мы обязательно ориентируемся на
                    его интерес.
                    Мы постоянно совершенствуется,
                    используем лучший мировой опыт
                    внедряем собственные разработки,
                    повышая стандарты рaботы. Мы не
                    останавливаемся на достигнутых
                    результатах',
                'tekfor' => 'Kомпания Текфор, российская производственная
                    компания, фокусирующая
                    свою деятельность на производстве и продаже электротехнической продукции.
                    Последовательные шаги,
                    предпринятые в рамках
                    стратегии развития, привели к тому, что компания
                    Текфор стала узнаваемым
                    брендом, на отечественном
                    и европейском рынке. Продукцию компании отличает
                    продуманность и изящество
                    технических решений и
                    высокий уровень исполнения. Забота о конечных
                    потребителях, которые будут
                    пользоваться продукцией
                    Текфор, создание выгодных
                    решений для дилеров и
                    партнеров, есть и будет
                    основной идеологией при
                    создание новой продукции
                    Текфор.',
                'novatek' => 'NOVATEK
                    Компания «Новатек-Электро» занимается разработкой и полным циклом
                    производства электротехнической продукции.
                    Работает с 1998 года и
                    представлена на 4 континентах в более чем 20
                    страна мира.
                    По запросам клиентов
                    возможна разработка и
                    запуск в производство
                    новых приборов.
                    Также возможна модернизация продукции дополнительными параметрами.
                    Гарантия на всю продукцию 10 лет.',
                'kbt' => 'История бренда КВТ началась
                    еще в 1996 году: именно тогда
                    была образована компания,
                    специализирующаяся на торговле кабельной арматуры,
                    изделиями для прокладки и
                    монтажа кабеля. За пять лет
                    работы компания стала одним
                    из узнаваемых игроков на электротехническом рынке; и, более
                    того, первая в 2001 году представила на рынке электромонтажный инструмент',
                'mutlusan' => 'Компания MUTLUSAN произ
                    -
                    водит электротехническое
                    оборудование на протяже
                    -
                    нии более 30 лет. Ассорти
                    -
                    мент производимой продук
                    -
                    ции очень широк: выключа
                    -
                    тели, кабельные каналы,
                    аксессуары и другое. Высо
                    -
                    кокачественный кабельный
                    канал производится на
                    заводах турецкой компании
                    Mutlusan Electrik.
                    В производстве кабельных
                    каналов (короба) компания
                    использует соответствующий
                    европейским стандартам
                    PVC (Поливинил Хлорид).
                    Этот материал устойчив к
                    огню, химическим материа
                    -
                    лам, кислотам и механиче
                    -
                    ским
                    повреждениям и деформа
                    -
                    циям, различным температу
                    -
                    рам от (-40C) до (+60С).',
                'onka' => 'Компания ONKA, основанная в
                    1986 году, разрабатывает и
                    производит электрические
                    компоненты и аксессуары для
                    монтажа. Основная часть продукции ONKA — клеммы
                    различных видов, конфигураций и размеров.
                    Производственные мощности
                    ONKA GROUP находятся в
                    Стамбуле (Турция). На сегодняшний день специалисты
                    компании ONKA имеют богатый
                    опыт и знания в своей области
                    и считают основными принципами в производстве качество,
                    экономичность и надежность.
                    Производственные мощности
                    фабрики — 5 млн. единиц в
                    месяц. ONKA имеет долю рынка
                    в Турции 25% и экспортирует
                    свою продукцию в 55 стран по
                    всему миру',
                'eaton' => 'Eaton - американская
                    компания со специализацией в области управления энергией. В 2017 году
                    объём продаж продукции
                    и услуг Eaton составил
                    $20,4 миллиарда. Eaton
                    предлагает энергоэффективные решения, которые
                    помогают клиентам управлять электрической,
                    гидравлической и механической энергией рациональнее, безопаснее и
                    устойчивее. Eaton занимается улучшением качества
                    жизни и окружающей
                    среды за счет использования технологий и услуг по
                    управлению энергопотреблением. В штате Eaton
                    насчитывается около 98
                    тыс. сотрудников. Помпания продает продукцию
                    клиентам почти в 180 странах мира'
            );

            $about = array(
                'biz' => 'О нас',
                'content1' => 'Nura Group была одной из первых
                    компаний в Узбекистане, которая начала
                    сотрудничать с крупнейшими
                    мировыми брендами, и является
                    одной из ведущих компаний в
                    электроэнергетическом секторе
                    Узбекистана. Сегодня
                    компания сотрудничает с более
                    чем 15 ведущими мировыми брендами.
                    Также он является дистрибьютором
                    этих брендов в Узбекистане.
                    Основным видом деятельности
                    является производство и поставка
                    электротехнической оборудовании
                    на рынок Узбекистана. Nura Group
                    работает в сотрудничестве с
                    республиками Кыргызстан и
                    Таджикистан.',
                'content2' => 'Nura Group
                    расположена в Алмазарском районе Ташкента на площади более 40 000 квадратных
                    метров. Из
                    них 10 000
                    квадратных метров - это производ ственные площади и склады, а остальные -
                    офисные и
                    жилые здания.
                    Девиз Nura Group - честно работать в сфере электроэнергетики Республики
                    Узбекистан и еще больше укреплять позиции нашей страны на мировом
                    рынке электроэнергии'
            );

            $numbers = array(
                'raqam' => 'Числы',
                'raqamlarda' => 'в числах',
                'info1' => 'Наименований продукции',
                'info2' => 'летний',
                'info3' => 'Опыт в сфере электротехнического оборудования',
                'info4' => 'Ретейл клиентов по всей Республике',
                'info5' => 'Всемирно известных брендов-партнёров'
            );

            $team = 'Наша команда';

            $client = array(
                'mijoz' => 'Наши клиенты',
                'info1' => 'Государственные органы',
                'info2' => 'Cтроительные компании',
                'info3' => 'Промышленные предприятия',
                'info4' => 'Интернет магазины',
            );

            $yangilik = 'Новости';
            $yangiliklar = 'Все новости';

            $karta = array(
                'title' => 'Охват торговых точек',
                'toshkent' => 'Ташкент',
                'namangan' => 'Наманган',
                'andijon' => 'Андижан',
                'fargona' => 'Фергана',
                'sirdaryo' => 'Сырдарья',
                'jizzax' => 'Джизак',
                'samarqand' => 'Самарканд',
                'qashqadaryo' => 'Кашкадарья',
                'surxondaryo' => 'Сурхандарья',
                'navoiy' => 'Навои',
                'xorazm' => 'Хорезм',
                'buxoro' => 'Buxoro',
                'qoraqalpogiston' => 'Каракалпакстан'
            );

            $footer = array(
                'aloqa' => 'Контакт',
                'manzil' => 'Адрес',
                'telefon' => 'Телефон',
                'pochta' => 'Почта',
                'adres1' => '100027 Узбекистан',
                'adres2' => 'Город Ташкент, Олмазор район',
                'adres3' => 'Чангалзор-Мавзук ул.3',
                'home' => 'На главную',
            );

        }

        else if ($lang == 'ens')
        {
            $name_team = 'name_ens';
            $info_team = 'info_ens';

            $title_news = 'title_ens';

            $sc = 'Scroll';


            $menu = array(
                'brend' => 'Our brands',
                'haqimizda' => 'About',
                'raqam' => 'Numbers',
                'jamoa' => 'Our team',
                'mijoz' => 'Our clients',
                'yangilik' => 'News',
                'kontakt' => 'Contact'

            );

            $header = array(
                'title1' => 'one of the biggest companies',
                'uzb' => 'in Uzbekistan',
                'content1' => 'Distributor of a number of world-famous brands in',
                'content2' => 'In the field of electrical and lighting equipment',
            );

            $brend = array(
                'brendlar' => 'Our brands',
                'batafsil' => 'More ',
                'qaytish' => 'Back',
                'chint' => 'The CHINT company, founded in
                    1984, is the world`s leading
                    supplier of intelligent
                    energy solutions. It actively implements the "4 + 1" industrial sectors, including intelligent electrical engineering, environmentally friendly
                    clean energy, industrial
                    management and automation,
                    smart home and incubator, forming
                    integrated whole industry chain "electricity production, storage, transmission,
                    substations, distribution, production and consumption. ». And he can
                    boast an extensive business network in more than 140 countries and
                    regions, as well as more than 30,000
                    employees and annual revenue from
                    sales of more than 11.4 billion
                    US dollars. CHINT is included in
                    number of 500 largest companies
                    China for 18 years in a row. Her daughter
                    The company, CHINT Electrics, became
                    the first company in China whose main business is low-voltage
                    electric power industry, and got into
                    list of the 50 largest Asian
                    companies traded on the market
                    shares.',
                'nura' => 'Nura Electric is one of the recently
                    established companies in electro`
                    Uzbekistan`s energy sector in 2015, occupying
                    place and position in the markets
                    Uzbekistan and the world.
                    Currently the main
                    the direction of activity
                    is the production and supply of more than
                    350 items of electrical products and accessories.
                    Main products of Nural
                    Electric is an assortment of lighting devices, a socket and
                    switches and their accessories.
                    Products
                    fully complies with international standards in quality and design and has its own certificate of compliance',
                'redray' => 'REDRAY- young trading
                    brand of lighting solutions in
                    Uzbekistan. REDRAY is
                    synonymous with high-quality, reliable, innovative
                    life-enhancing techniques
                    people.
                    LLC "REDRAY" specializes in the wholesale of lighting devices, in particular LED lamps for household and industrial purposes.
                    The main partner on the Chinese side is the production company RED100
                    (24 years in the lighting market, 79 partners in
                    more than 60 countries of the world).
                    The first sales experience on the territory of Uzbekistan of LED lamps under the brand REDRAY
                    started from 01.01.19, with the first
                    batches of 85,000 units.
                    During, 6 months it was',
                'nura_e' => 'JV LLC "NUR INVEST TEXNOLOGYA" is
                    a leading manufacturer and supplier of low-voltage equipment, in
                    In 2011, she opened a new plant in the
                    city of Tashkent for the production of
                    energy-saving lamps under
                    the trademark "NURA Lights ".
                    The company produces durable,
                    economical and safe light sources of various capacities.
                    The desire of customers is the highest priority for us. Behind
                    any process in the company is worth
                    customer requirement, solving tasks,
                    we definitely focus on
                    his interest.
                    We are constantly improving,
                    using the best world experience
                    we implement our own developments,
                    raising the standards of work. We don`t
                    we stop at the achieved
                    results',
                'tekfor' => 'The company Tekfor, Russian production
                    the company focusing
                    its activities in the production and sale of electrical and technical products.
                    Consistent steps
                    taken in the framework of
                    development strategies, whether due to the fact that the company
                    Techfor has become recognizable
                    by brand, on the domestic
                    and the European market. The company`s products are distinguished by
                    thoughtfulness and elegance
                    technical solutions and
                    high level of performance. Taking care of the final
                    consumers who will
                    use products
                    Techfor, creating profitable
                    solutions for dealers and
                    partners, there are and will be
                    the main ideology at
                    creating new products
                    Techfor.',
                'novatek' => 'NOVATEK
                    The company "Novatek-Elec tro" is engaged in the development and full cycle
                    production of electrotechnical products.
                    It has been operating since 1998 and
                    it is represented on 4 continents in more than 20
                    the country of the world.
                    According to customer requests
                    it is possible to develop and
                    launch into production
                    new devices.
                    It is also possible to modernize products with additional parameters.
                    The warranty for all products is 10 years.',
                'kbt' => 'The history of the KW brand has begun
                    back in 1996: that`s when
                    a company was formed
                    specializing in the sale of cable fittings,
                    products for laying and
                    cable installation. In five years
                    The company`s work has become one
                    of the recognizable players in the electrical market; and, more
                    in addition, the first in 2001 presented an electrical installation tool on the market',
                'mutlusan' => 'MUTLUSAN Company produces
                    -
                    drives electrical equipment
                    equipment on the stretch
                    - research
                    institute for more than 30 years. Assorted
                    -
                    ment of the produced products
                    -
                    the range is very wide: off
                    - TV
                    sets, cable channels,
                    accessories and more. High
                    - high-
                    quality cable
                    the channel is produced on
                    factories of the Turkish company
                    Mutlusan Electrik.
                    In the production of cable
                    channels (boxes) company
                    uses the appropriate
                    European standards
                    PVC (Polyvinyl Chloride).
                    This material is resistant to
                    fire, chemical matter
                    -
                    lam, acids and mechanical

                    - damage and deformation

                    -
                    qiyam, different temperatures
                    -
                        рам от (-40C) до (+60С).',
                'onka' => 'ONKA Company, founded in
                    In 1986, develops and
                    manufactures electric
                    components and accessories for
                    installation. The main part of the ONKA - terminals
                    various types, configurations and sizes.
                    Production facilities
                    ONKA GROUP are located in
                    Istanbul (Turkey). For today, specialists
                    HONKA companies have a rich
                    experience and knowledge in your field
                    and they consider quality,
                    economy and reliability to be the main principles in production.
                    Production facilities
                    factories — 5 million units in
                    month. ONKA has market share
                    in Turkey, 25% and exports
                    its products to 55 countries by
                    to the whole world',
                'eaton' => 'Eaton - American
                    a company with a specialization in energy management. In 2017
                    product sales volume
                    and Eaton`s services amounted to
                    $20.4 billion. Eaton
                    offers energy-efficient solutions that
                    help customers to manage the electric,
                    hydraulic and mechanical energy is more rational, safer and
                    steadier. Eaton is engaged in quality improvement
                    life and environment
                    environment through the use of technologies and services for
                    energy consumption management. In the state of Eaton
                    there are about 98
                    thousand employees. The pump sells products
                    clients in almost 180 countries of the world'
            );

            $about = array(
                'biz' => 'About',
                'content1' => 'Nura Group was one of the first
                    companies in Uzbekistan that started
                    cooperate with the largest
                    global brands, and is
                    one of the leading companies in the
                    electric power sector
                    Uzbekistan. Today
                    the company cooperates with more
                    more than 15 leading global brands.
                    He is also a distributor
                    these brands are in Uzbekistan.
                    The main activity
                    is the production and supply
                    electrical equipment
                    to the market of Uzbekistan. Nura Group
                    works in cooperation with
                    the Republics of Kyrgyzstan and
                    Tajikistan.',
                'content2' => 'Nura Group
                    It is located in the Almazar district of Tashkent on an area of more than 40,000 square meters.
                    meters. Of
                    these, 10,000
                    square meters are production areas and warehouses, and the rest are
                    office and
                    residential buildings.
                    The motto of Nura Group is to work honestly in the electric power industry of the Republic
                    Uzbekistan and further strengthen the position of our country in the world
                    electricity market'
            );

            $numbers = array(
                'raqam' => 'Numbers',
                'raqamlarda' => 'in numbers',
                'info1' => 'Product names',
                'info2' => 'years',
                'info3' => 'Experience in the field of electrical equipment',
                'info4' => 'Retail customers throughout the republic',
                'info5' => 'World-famous partner brands'
            );

            $team = 'Our team';

            $client = array(
                'mijoz' => 'Our customers',
                'info1' => 'Goverment agencies',
                'info2' => 'Construction companie',
                'info3' => 'Industrial enterprises',
                'info4' => 'Online stores',
            );

            $yangilik = 'News';
            $yangiliklar = 'All news';

            $karta = array(
                'title' => 'Coverage of retail outlets',
                'toshkent' => 'Tashkent',
                'namangan' => 'Namangan',
                'andijon' =>'Andijan',
                'fargona' =>'Fergana',
                'sirdaryo' => 'SyrDarya',
                'jizzax' => 'Jizzakh',
                'samarqand' => 'Samarkand',
                'qashqadaryo' => 'Kashkadarya',
                'surxondaryo' => 'Aurkhandarya',
                'navoiy' => 'Navoi',
                'xorazm' => 'Khorezm',
                'buxoro' => 'Buxoro',
                'qoraqalpogiston' => 'Karakalpakstan'
            );

            $footer = array(
                'aloqa' => 'Contact',
                'manzil' =>'Address',
                'telefon' => 'Phone',
                'pochta' =>' e Mail',
                'adres1' =>'100027 Uzbekistan',
                'adres2' =>'Tashkent city, State district',
                'adres3' =>'Chalganzor-Mavuk str.3',
                'home' => 'Home',
            );
        }

        else
        {

            $name_team = 'name_uzs';
            $info_team = 'info_uzs';

            $title_news = 'title_uzs';

            $sc = 'Pastga tushing';


            $menu = array(
                'brend' => 'Brendlar',
                'haqimizda' => 'Biz haqimizda',
                'raqam' => 'Raqamlar',
                'jamoa' => 'Jamoa',
                'mijoz' => 'Mijozlar',
                'yangilik' => 'Yangiliklar',
                'kontakt' => 'Kontakt'
            );

            $header = array(
                'title1' => 'O`zbekistonda',
                'uzb' => 'eng yirik kompaniyalardan biri',
                'content1' => 'dunyodagi bir qator mashhur brendlarning distribyutori',
                'content2' => 'Elektr va yoritish uskunalari sohasi',
            );

            $brend = array(
                'brendlar' => 'Bizning brendlar',
                'batafsil' => 'Ba`tafsil',
                'qaytish' => 'Qaytish',
                'chint' => 'CHINT 1984-da tashkil etilgan
                    yil, dunyodagi etakchi hisoblanadi
                    aqlli yetkazib beruvchi
                    energiya echimlari. Bu aktiv ammo "4 + 1" sanoat sektorini, shu jumladan, aqlli elektrotexnika, ekologik    jihatdan qulay
                    toza energiya, sanoat
                    boshqarish va avtomatlashtirish,
                    aqlli uy va inkubator, shakllantirish
                    integratsiyalashgan butun sanoat zanjiri "elektr elektr quvvati ishlab chiqarish, saqlash, uzatish,
                    podstansiyalar, tarqatish, Proda Zhi va iste`mol. ». Va u mumkin
                    140 dan ortiq mamlakatlarda keng qamrovli tarmoq ishi bilan maqtanish va
                    hududlar, shuningdek, 30 000 dan ortiq
                    xodimlar va yillik daromad
                    11,4 milliarddan ortiq savdo
                    AQSh dollari. CHINT kiradi
                    500 yirik kompaniyalar soni
                    Xitoy 18 yil ketma-ket. Uning qizi
                    CHINT Electrics kompaniyasi
                    Xitoyda birinchi kompaniya, uning asoslari biznes-past kuchlanishli
                    elektr, va bor
                    50 eng katta Osiyo ro`yxati
                    bozorda savdo qiluvchi kompaniyalar
                    qimmatli qog`ozlar.',
                'nura' => 'Nura Electric-yaqinda
                    elektr kompaniyalari tomonidan yaratilgan`
                    energetika sohasida O`zbek tegirmonlari 2015-yilda
                    bozorlardagi joy va joylashuv
                    O`zbekiston va dunyo.
                    Bugungi kunda asosiy
                    faoliyat yo`nalishi
                    O`zbekiston bozoriga ka ishlab chiqarish va yetkazib berish
                    Mahsulotlar va aksessuarlar uchun 350 turdagi elektr jihozlari.
                    Nuralning asosiy mahsulotlari
                    Elektr-bu qurilmalar, soket va
                    kalitlar va ularning aksessuarlari.
                    Mahsulotlar
                    Cache stva va dizayn bo`yicha milliy standartlarga to`liq mos keladi va muvofiqlik sertifikatiga ega',
                'redray' => 'REDRAY-yosh savdo
                    yengil echimlar belgisi
                    O`zbekiston. REDRAY hisoblanadi
                    yuqori sifatli Nuh, ishonchli, innovatsion bilan sinonimga ega
                    hayotni yaxshilash texnikasi
                    odamlar.
                    Mahsulotlar va etkazib beruvchilarning lentasini yanada aniqroq qurish uchun
                    Xitoy tomoni bilan asosiy hamkor proiz suv kompaniyasi RED100 hisoblanadi
                    (24 yil bozorda yoritish asboblari, 79 hamkorlar
                    dunyoning 60 mamlakatlaridan ko`proq).
                    REDRAY brendi ostida O`zbekiston Terri toria LED chiroqlarini sotishning birinchi tajribasi
                    01.01.19 bilan boshlandi, birinchi
                    85.000 ta qism.
                    Davomida, 6 oy bo`ldi',
                'nura_e' => '"NUR INVEST TEXNOLOGYA" MCHJ QK
                    etakchi ishlab chiqaruvchi va past kuchlanishli asbob-uskunalar qutisi
                    2011 yilda yangi zavod ochildi
                    ishlab chiqarish bo`yicha Toshkent shahri
                    energiya tejaydigan lampalar ostida
                    "NURA Lights "savdo belgisi.
                    Kompaniya bardoshli ishlab chiqaradi,
                    turli quvvatlarning iqtisodiy va xavfsiz yorug`lik manbalari.
                    Mijozlar istagi naivys PWM biz uchun ustuvor hisoblanadi. Uchun
                    kompaniyadagi har qanday jarayon
                    muammolarni hal qilishda mijozning talabi,
                    biz, albatta, diqqat markazida
                    uning qiziqishi.
                    Biz doimo yaxshilanmoqda,
                    biz eng yaxshi jahon tajribasidan foydalanamiz
                    o`z ishlanmalarni amalga oshirish,
                    ish standartlarini oshirish. Biz emas
                    biz erishgan narsalar haqida to`xtalamiz
                    natijalar',
                'tekfor' => 'Mahsulotlar va etkazib beruvchilarning lentasini yanada aniqroq qurish uchun
                    kompaniya diqqat markazida
                    elektr texnika mahsulotlarini ishlab chiqarish va sotish bo`yicha o`z faoliyati.
                    Keyingi qadamlar,
                    doirasida amalga oshirilgan
                    rivojlanish strategiyasi, bu kompaniya
                    Tekfor tanib olindi
                    brend, mahalliy
                    va Evropa bozori. Kompaniyaning duktsiyasi haqida farq qiladi
                    ehtiyotkorlik va inoyat
                    texnik echimlar va
                    yuqori darajada amalga oshiriladi. Oxirgi g`amxo`rlik
                    iste`molchilar
                    mahsulotlardan foydalanish
                    Tekfor, foydali yaratish
                    dilerlar uchun echimlar va
                    hamkorlar, bor va bo`ladi
                    asosiy mafkura
                    yangi mahsulotlar yaratish
                    Tekfor.',
                'novatek' => 'NOVATEK
                    Mahsulotlar va etkazib beruvchilarning lentasini yanada aniqroq qurish uchun
                    mahsulotlar va etkazib beruvchilarning lentasini yanada aniqroq qurish uchun
                    1998 yildan buyon faoliyat yuritib kelmoqda
                    4 dan ortiq 20 Conti gentida taqdim etilgan
                    dunyo mamlakati.
                    Mijozlar talablariga muvofiq
                    rivojlanish mumkin va
                    ishlab chiqarishga kirish
                    yangi qurilmalar.
                    Bundan tashqari, mavjud bo`lgan mahsulotlar uchun zamonaviy variantlar mavjud.
                    10 yil davomida barcha mahsulotlar uchun kafolat.',
                'kbt' => 'KBT brendining tarixi boshlandi
                    1996 yil ichida: o`sha paytda
                    kompaniya tashkil etildi,
                    Thor govle kabel armatura ixtisoslashgan,
                    mahsulotlar va etkazib beruvchilarning lentasini yanada aniqroq qurish uchun
                    kabelni o`rnatish. Besh yil ichida
                    ish kompaniyasi biriga aylandi
                    Elec trotechnik bozorida taniqli futbolchilar; va, ko`proq
                    Togo, 2001da birinchi bo`lib elektronlar bozoriga kirish vositasini qo`ydi',
                'mutlusan' => 'MUTLUSAN kompaniyasi
                    -
                    Elektrotexnikani boshqaradi
                    uskunalar
                    -
                    tadqiqot instituti 30 yildan ortiq. Turli xil
                    -
                    ishlab chiqarilgan mahsulot
                    -
                    juda keng: o`chirish
                    -
                    teli, kabel kanallari,
                    aksessuarlar va boshqalar. Oliy
                    -
                    sifatli simi
                    kanal quyidagi tarzda amalga oshiriladi
                    turk kompaniyasining fabrikalari
                    Mutlusan Electrik.
                    Kabel ishlab chiqarishda
                    kanallarning birortasi ham ushbu nashr bilan ulashmadi
                    tegishli foydalanadi
                    Evropa standartlari
                    PVX (polivinil xlorid).
                    Ushbu materialga chidamli
                    olov, kimyoviy moddalar
                    -
                    Lam, kislotalar va mexanik
                    -
                    ski
                    zarar va deformatsiyalar
                    -
                    siyam, turli xil temperatura
                    -
                    (-40C) dan (+60S) gacha.',
                'onka' => 'ONKA kompaniyasi tashkil etilgan
                    1986 yil, ishlab chiqadi va
                    elektr ishlab chiqaradi
                    komponentlar va aksessuarlar
                    o`rnatish. Onka — terminallar duktsiyasi haqida asosiy qism
                    turli xil, konfigürasyonlar va o`lchamlar.
                    Ishlab chiqarish quvvati
                    ONKA guruhi
                    Istanbul (Turkiya). Bugungi kunda mutaxassislar
                    HONKA kompaniyalari boy
                    o`z sohasida tajriba va bilim
                    va sifat ishlab chiqarishda asosiy bosim pami hisoblanadi,
                    iqtisodiyot va ishonchlilik.
                    Ishlab chiqarish quvvati
                    mahsulotlar va etkazib beruvchilarning lentasini yanada aniqroq qurish uchun
                    oy. ONKA bozor ulushiga ega
                    Turkiyada 25% va eksport qiladi
                    55 ta mamlakatda o`z mahsulotlari
                    butun dunyo bo`ylab',
                'eaton' => 'Eaton-Amerika
                    energiya boshqarish sohasida TIA ixtisoslashgan kompaniya. 2017 yilda
                    mahsulot sotish hajmi
                    va Eaton xizmatlari
                    $ 20,4 milliard. Eaton
                    energiya effektlarini taklif qiladi
                    mijozlarga elektrni to`kib tashlashga yordam bering,
                    elektr energiyasi bilan ishlaydigan gidravlik va mexanik ratsio ko`proq, xavfsizroq va
                    barqaror. Eaton sifati yaxshilanishi mumkin
                    hayot va atrof-muhit
                    texnologiyalar va xizmatlar tadqiqot instituti foydalanish orqali atrof-muhit
                    energiya ta`minotini boshqarish. Eaton shtatida
                    98 haqida bor
                    ming xodim. Pompa nia mahsulot sotadi
                    mijozlar deyarli 180 bet nah dunyoda'
            );

            $about = array(
                'biz' => 'Biz haqimizda',
                'content1' => 'Nura Group birinchilardan bo`ldi
                    O`zbekistonda boshlagan kompaniyalar
                    eng yiriklari bilan hamkorlik qilish
                    jahon brendlari va shunday
                    etakchi kompaniyalaridan biri
                    elektr sektori
                    O`zbekiston. Bugun
                    kompaniya ko`proq bilan hamkorlik qiladi
                    15 dan ortiq etakchi jahon brendlari.
                    U shuningdek distribyutor O`zbekistonda ushbu brendlar.
                    Asosiy faoliyat
                    ishlab chiqarish va etkazib berishdir
                    elektr jihozlari
                    O`zbekiston bozoriga. Nura guruhi
                    bilan hamkorlikda ishlaydi
                    Qirg`iziston respublikalari va
                    Tojikiston.',
                'content2' => 'Nura Grou Toshkentning Olmazor tumanida, 40 ming kvadrat metrdan ortiq maydonda joylashgan
                    metr. Kimdan
                    ular 10 ming
                    kvadrat metr - ishlab chiqarish maydonlari va omborlar, qolganlari esa
                    ofis va
                    turar -joy binolari.
                    Nura Group shiori - respublikaning elektr energetikasida halol ishlash.
                    O`zbekiston va mamlakatimizning dunyodagi mavqeini yanada mustahkamlash
                    elektr bozori',
            );

            $numbers = array(
                'raqam' => 'Raqamlar',
                'raqamlarda' => 'raqamlarda',
                'info1' => 'Mahsulot nomlari',
                'info2' => 'yillik',
                'info3' => 'Elektr texnikasi sohasida tajriba',
                'info4' => 'Respublika bo`ylab chakana mijozlar',
                'info5' => 'Jahonga mashhur hamkor brendlar'
            );

            $team = 'Bizning jamoa';

            $client = array(
                'mijoz' => 'Mijozlarimiz',
                'info1' => 'Davlat organlari',
                'info2' => 'Qurilish kompaniyalari :',
                'info3' => 'Sanoat korxonalari',
                'info4' => 'Internet do`konlar',
            );

            $yangilik = 'Yangiliklar';
            $yangiliklar = 'Yangiliklar';

            $karta = array(
                'title' => 'Savdo nuqtalarini qamrab olish',
                'toshkent' => 'Toshkent',
                'namangan' => 'Namangan',
                'andijon' => 'Andijon',
                'fargona' => 'Farg`ona',
                'sirdaryo' => 'Sirdaryo',
                'jizzax' => 'Jizzax',
                'samarqand' => 'Samarqand',
                'qashqadaryo' => 'Qashqadaryo',
                'surxondaryo' => 'Surxondaryo',
                'navoiy' => 'Navoiy',
                'xorazm' => 'Xorazm',
                'buxoro' => 'Buxoro',
                'qoraqalpogiston' => 'Qoraqalpog`iston'
            );

            $footer = array(
                'aloqa' => 'Aloqa',
                'manzil' => 'Manzil',
                'telefon' => 'Telefon',
                'pochta' => 'E-pochta',
                'adres1' => '100027 O`zbekiston',
                'adres2' => 'Toshkent shahri, Olmzor tumani',
                'adres3' => 'Chalganzor-mavzesi 3-uy',
                'home' => 'Bosh sahifa',
            );
        }

        return view('welcome', compact('c', 'teams', 'news', 'name_team', 'info_team', 'title_news', 'menu', 'header', 'brend', 'about', 'numbers', 'team', 'client', 'yangilik',     'yangiliklar', 'karta', 'footer', 'sc'));
    }

    public function news(Request $request)
    {
        $request->except('_token');

        if (isset($_COOKIE["lang"]))
            $lang = $_COOKIE["lang"];

        else
            $lang = 'uzs';


        if(!isset($request->count))
            $count = 2;
        else
            $count = $request->count + 2;

        $new = DB::table('news')->orderBy('id', 'desc')->paginate($count);

        $j = DB::table('news')->count();


        if ($lang == 'rus')
        {
            $title_news = 'title_rus';
            $content_news = 'content_rus';

            $site = array(
                'qaytish' => 'Назад',
                'news' => 'Новости',
                'more' => 'Показать ещё',
                'telefon' => 'Телефон',
                'pochta' => 'Почта',
                'manzil' => 'Адрес',
                'adres' => 'Узбекистан, Город Ташкент, Олмазор район,
                    Чалганзор - Мавзук ул.3'
            );
        }

        else if ($lang == 'ens')
        {

            $title_news = 'title_ens';
            $content_news = 'content_ens';

            $site = array(
                'qaytish' => 'Back',
                'news' => 'News',
                'more' => 'Show more',
                'telefon' => 'Phone',
                'pochta' => 'Email',
                'manzil' => 'Adress',
                'adres' => 'Uzbekistan, Tashkent city, Olmazor district,
                    Chalganzor - Mavzuk str.3'
            );
        }

        else
        {

            $title_news = 'title_uzs';
            $content_news = 'content_uzs';

            $site = array(
                'qaytish' => 'Qaytish',
                'news' => 'Yangiliklar',
                'more' => 'Yana ko`rsatish',
                'telefon' => 'Telefon',
                'pochta' => 'E pochta',
                'manzil' => 'Manzil',
                'adres' => 'Узбекистан, Город Ташкент, Олмазор район,
                    Чалганзор - Мавзук ул.3'
            );
        }

        return view('news', compact('site', 'new', 'title_news', 'content_news', 'j', 'count'));
    }

    public function new($id)
    {

        if (isset($_COOKIE["lang"]))
            $lang = $_COOKIE["lang"];

        else
            $lang = 'uzs';

        $news = DB::table('news')->where('id', $id)->get();


        if ($lang == 'rus')
        {

            $title_news = 'title_rus';
            $content_news = 'content_rus';
            $body_news = 'body_rus';

            $site = array(
                'qaytish' => 'Назад',
                'news' => 'Новости',
                'telefon' => 'Телефон',
                'pochta' => 'Почта',
                'manzil' => 'Адрес',
                'adres' => 'Узбекистан, Город Ташкент, Олмазор район,
                    Чалганзор - Мавзук ул.3'
            );
        }

        else if ($lang == 'ens')
        {

            $title_news = 'title_ens';
            $content_news = 'content_ens';
            $body_news = 'body_ens';

            $site = array(
                'qaytish' => 'Back',
                'news' => 'News',
                'telefon' => 'Phone',
                'pochta' => 'Email',
                'manzil' => 'Adress',
                'adres' => 'Uzbekistan, Tashkent city, Olmazor district,
                    Chalganzor - Mavzuk str.3'
            );
        }

        else
        {
            $title_news = 'title_uzs';
            $content_news = 'content_uzs';
            $body_news = 'body_uzs';

            $site = array(
                'qaytish' => 'Qaytish',
                'news' => 'Yangiliklar',
                'telefon' => 'Telefon',
                'pochta' => 'E pochta',
                'manzil' => 'Manzil',
                'adres' => 'Узбекистан, Город Ташкент, Олмазор район,
                    Чалганзор - Мавзук ул.3'
            );
        }

        return view('new', compact('site', 'news', 'title_news', 'content_news', 'body_news'));
    }
}
