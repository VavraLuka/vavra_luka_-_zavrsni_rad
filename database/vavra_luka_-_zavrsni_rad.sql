-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 11:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vavra_luka_-_zavrsni_rad`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(34) NOT NULL,
  `favoritesList` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `userEmail`, `favoritesList`) VALUES
(3, 'ana.horvat@gmail.com', '51,46,43'),
(5, 'ivana.bozic@gmail.com', '72,71');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `manufacturer` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `manufacturer`, `description`) VALUES
(1, 'Sony', 'Sony Corporation (uobičajenog naziva Sony) je japanski konglomerat multinacionalnih korporacija sa sjedištem u japanskoj prijestolnici, Tokiju. Sony je jedan od najvećih medijskih konglomerata na svijetu. Sam Sony bavi se proizvodnjom elektronike, informacijskih, komunikacijskih i video tehnologija i igraćih konzola čiji su proizvodi vrhunske kvalitete. Osnivači kompanije, Akio Morita i Masaru Ibuka ime tvrtke stvorili su od izvedenice latinske riječi Sonus, što znači zvuk, odnosno na engleskom jeziku sound (u engleskom slengu: sonny).'),
(3, 'Behringer', 'Behringer je tvrtka za audio opremu koju je 1989. godine osnovao Uli Behringer. Specijalizirani su za proizvode za tržišta turneja i zvuka uživo, ugostiteljstva, glazbenika te snimanja i emitiranja.'),
(4, 'the box pro', 'the box pro pripada Thomannovim vlastitim markama. Ove proizvode proizvode isključivo poznati proizvođači koji također proizvode opremu za mnoge druge poznate robne marke. Vaša prednost: kvalitet robne marke po niskoj cijeni.'),
(5, 'Fun Generation', 'Fun Generation je jedan od brendova online trgovine thomann.de. Proizvode proizvode različiti poznati proizvođači, koji također proizvode opremu za mnoge druge poznate robne marke. Kao rezultat izravnog uvoza, bez posrednika, možemo Vam ponuditi kvalitetu robne marke po vrlo niskim cijenama.'),
(6, 'Bose', 'Tvrtku Bose Corporation osnovao je 1964. godine dr. Amar Gopal Bose. Sjedište je u The Mountainu (SAD). Službeni njemački zastupnik je tvrtka Bose GmbH iz Friedrichsdorfa (D).'),
(7, 'Allen and Heath', 'Allen & Heath je vodeći dizajner i proizvođač miks stolova za zvuk uživo ili stalne instalacije, DJ-e, studije za emitiranje i snimanje.'),
(8, 'Apple', 'Apple Inc. je američka računalna tvrtka sa sjedištem u Silicijskoj dolini u gradu Cupertino, savezna država Kalifornija. Apple je jedna od tvrtki koja je pomogla pokretanju revolucije u osobnim računalima (PC) u kasnim 70. godinama 20. stoljeća, najprije računalima Apple I i Apple II, te kasnije Macintosh obitelji računala. Apple je tvrtka poznata i po mnogim inovacijama na polju softvera i hardvera, te po MP3 uređajima iPod kao i po iTunes Music Store.'),
(9, 'Botex', 'Početak tvrtke Botex je 1995. godine. Sjedište tvrtke Botex je u Treppendorfu (D). Botex je jedan od Thomannovih vlastitih brendova. Proizvode proizvode različiti poznati proizvođači, koji također proizvode opremu za mnoge druge poznate robne marke. Kao rezultat izravnog uvoza, bez posrednika, možemo Vam ponuditi kvalitetu robne marke po vrlo niskim cijenama.'),
(10, 'Cameo', 'Cameo je 2011. osnovao Adam Hall Group. Glavni ured tvrtke Cameo je u Neu-Anspachu (D). Brend Cameo je pododjel matične grupe Adam Hall koja također posjeduje brendove kao što su LD Systems, Gravity, Palmer, Defender i naravno Adam Hall.'),
(11, 'Crown', 'Crown je sinonim za kvalitetu u svijetu profesionalne audio opreme. Njihova ponuda pojačala i uređaja za obradu zvuka nadmašuje očekivanja u industriji. Bilo da se radi o ozvučavanju koncerta, instalacijama u klubovima ili kućnim studijima, Crown će pružiti izvanredne performanse i trajnost.'),
(12, 'Denon DJ', 'Denon DJ je neizostavan partner svakom DJ-u, bez obzira jeste li profesionalac ili tek početnik. Njihova ponuda kontrolera, medijskih uređaja i softvera olakšava miksiranje i stvaranje glazbe. Neka Denon DJ bude vaš kreativni alat na putu prema nezaboravnim glazbenim performansima.'),
(13, 'Eurolite', 'Eurolite je stručnjak za svjetlosnu opremu. Njihovi svjetlosni uređaji i efekti dodaju spektakularan vizualni element vašim nastupima ili događanjima. Neka vaša svjetlosna produkcija zablista uz Eurolite!'),
(14, 'EV', 'Electro-Voice, ili skraćeno EV, predstavlja vrhunsku kvalitetu u svijetu zvučnika, mikrofona i pojačala. Njihovi proizvodi pružaju čist i snažan zvuk, bilo da ste na koncertnoj bini, radiju ili u studiju.'),
(15, 'Hercules', 'Hercules je snaga za sve DJ-ove. Njihova oprema je stvorena kako bi svakom ljubitelju glazbe omogućila da postane vlastiti glazbeni kreator. Bez obzira jeste li profesionalac ili entuzijast, Hercules nudi kontrolere, slušalice i zvučnike koji će vam pomoći da miksate, stvarate i zabavljate se na potpuno novim razinama. Hercules je vaš partner na glazbenom putovanju, pružajući vam alate za ostvarivanje svojih glazbenih snova.'),
(16, 'HK Audio', 'HK Audio se ističe kao sinonim za izvanredne profesionalne audio sustave. Njihovi visokokvalitetni zvučnici i PA sustavi pružaju dosljedno vrhunske rezultate, čineći ih idealnim izborom za live nastupe, konferencije i instalacije. Kada je u pitanju zvuk bez kompromisa, HK Audio je pouzdan partner.'),
(17, 'JBL', 'JBL je svjetski priznati brend u audio industriji s povijesti koja obuhvaća desetljeća inovacija. Njihova paleta proizvoda, uključujući visokokvalitetne zvučnike, slušalice i audio tehnologiju, postavlja standarde u reprodukciji zvuka. Bez obzira jeste li u studiju, na pozornici ili kod kuće, JBL osigurava nevjerojatno čist i impresivan zvuk.'),
(18, 'LAB Gruppen', 'LAB Gruppen, švedski brend, proizvodi vrhunska pojačala i rješenja za upravljanje zvukom. Njihova inženjerska preciznost i predanost izvrsnosti čine ih odabirom za profesionalce u audio industriji. Bez obzira na složenost projekta, LAB Gruppen jamči vrhunske performanse i pouzdanost.'),
(19, 'LD Systems', 'LD Systems nudi širok spektar audio opreme za različite aplikacije. Njihovi PA sustavi, mikrofoni i audio dodaci osiguravaju visoku kvalitetu zvuka i pouzdanost. Bilo da ste zvučni inženjer, glazbenik ili vlasnik kluba, LD Systems ima rješenje koje odgovara vašim potrebama.'),
(20, 'Mackie', 'Mackie je sinonim za visokokvalitetne audio miksere, zvučnike i studijske monitore. Njihovi proizvodi su poznati po preciznosti zvuka i izdržljivosti, čineći ih idealnim za profesionalce u glazbenoj industriji. Bez obzira radi li se o live nastupima ili studijskom snimanju, Mackie pruža alate koji olakšavaju stvaranje izvanredne glazbe.'),
(21, 'Millenium', 'Millenium je brend koji nudi paletu vrhunskih glazbenih dodataka i opreme. Njihova ponuda uključuje visokokvalitetne nosače, stalke i ostalu glazbenu opremu koja je ključna za svaki glazbeni entuzijast. Millenium se ističe po kombinaciji trajnosti i pristupačnosti, što ga čini savršenim izborom za glazbenike koji traže pouzdanu opremu koja će trajati generacijama.'),
(22, 'Native Instruments', 'Native Instruments je sinonim za inovaciju u svijetu glazbenog stvaralaštva. Njihovi softverski i hardverski proizvodi omogućuju glazbenicima da istraže nove zvučne horizonte i stvaraju glazbu visoke kvalitete. Bilo da ste producent, DJ ili glazbenik, Native Instruments nudi alate koji će vas nadahnuti i omogućiti vam da ostvarite svoje glazbene vizije.'),
(23, 'Numark', 'Numark je jedan od vodećih brendova u svijetu DJ opreme. Njihova ponuda uključuje inovativne kontrolere, gramofone i DJ softver koji omogućuju kreativno miksiranje i nastupe. Bez obzira jeste li profesionalni DJ ili tek započeli svoju glazbenu karijeru, Numark je pouzdan partner za postizanje nevjerojatnih rezultata u svijetu glazbe.'),
(24, 'pro snake', 'Pro snake je renomirani proizvođač kvalitetnih kabela, konektora i drugih audio dodataka. Njihova paleta proizvoda jamči pouzdanu i visokokvalitetnu vezu između vaše audio opreme. Kada je važno da svaki signal bude čist i jasan, pro snake je pravi izbor.'),
(25, 'QSC', 'QSC je sinonim za izvanredne zvučne sustave. Njihovi inovativni zvučnici, pojačala i audio procesori osiguravaju dosljedno visoku kvalitetu zvuka, bilo da se radi o live nastupima, instalacijama ili profesionalnom ozvučavanju. Kada želite impresionirati svoju publiku, QSC će vas podići na višu razinu.'),
(26, 'Rane', 'Rane je mjesto gdje preciznost susreće kreativnost. Njihova linija proizvoda, uključujući DJ miksera, audio sučelja i procesore zvuka, osmišljena je kako bi pružila nevjerojatno čist i definiran zvuk. Rane je postao sinonim za izvrsnost u svijetu ozvučavanja i produkcije. Bez obzira jeste li DJ koji traži besprijekoran miksanje ili inženjer zvuka koji zahtijeva kontrolu nad svakim detaljem, Rane će vam omogućiti da stvorite audio iskustvo iz snova.'),
(27, 'Seeburg Acoustic', 'Seeburg Acoustic je specijalist za izradu visokokvalitetnih zvučnika i audio rješenja. Njihovi proizvodi osiguravaju iznimno čist zvuk i jasnost, što ih čini odličnim izborom za profesionalne audio aplikacije. Kada kvaliteta zvuka ne smije biti kompromitirana, Seeburg Acoustic je brend kojem se možete pouzdati.'),
(28, 'Showtec', 'Showtec je brend posvećen isporuci vrhunske svjetlosne opreme za različite događaje i izvedbe. Njihovi svjetlosni uređaji i efekti stvaraju spektakularne vizualne doživljaje, dodajući dodir profesionalizma svakoj produkciji. Kada želite postići maksimalan vizualni učinak, Showtec će vam pružiti alate da to postignete.'),
(29, 'Sirus', 'Sirus je tajanstveni svijet zvuka. Kroz godine inovacije i stručnosti, Sirus je stvorio audio opremu koja se ističe po svojoj sposobnosti da oživi glazbu na načine koji nadmašuju očekivanja. Njihova predanost visokoj kvaliteti i zvuku bez kompromisa čini ih vodećim izborom za profesionalce u glazbenoj industriji. Otkrijte dubinu zvuka uz Sirus i transformirajte svoju glazbu u nešto više od zvuka.'),
(30, 'Stairville', 'Stairville je specijalist za opremu za osvjetljavanje i scenske efekte. Njihovi proizvodi, uključujući svjetlosne kontrolere, svjetlosne efekte i truss sustave, pružaju profesionalcima u industriji svjetlosnih efekata sredstva za stvaranje nevjerojatnih scenskih iskustava. Stairville se ponosi kvalitetom i inovacijom u svim aspektima svjetlosne produkcije.'),
(31, 'Syrincs', 'Syrincs je ugledan proizvođač visokokvalitetnih zvučnika i subwoofera. Njihovi proizvodi ističu se po izvanrednom zvuku i konstrukcijskoj preciznosti. Kada želite pružiti publiku sa zvukom visoke razine, Syrincs je pouzdani izbor.'),
(32, 'Tascam', 'Tascam je renomirani brend u svijetu profesionalne audio opreme i studijskog inženjeringa. Njihovi audio interfejsi, snimači i studijska oprema omogućuju visoku kvalitetu snimanja i reprodukciju zvuka. Tascam je brend koji se može osloniti na profesionalci u glazbenoj industriji.'),
(33, 'the box', 'the box je poznat po svojoj liniji visokokvalitetnih zvučnika i subwoofera. Njihovi proizvodi pružaju iznimno čist i snažan zvuk, čineći ih idealnim za live nastupe, instalacije i studijsko snimanje. Kada vam je potreban zvuk bez kompromisa, the box će vas oduševiti svojim performansama i pouzdanošću.'),
(34, 'the sssnake', 'the sssnake je stručnjak za proizvodnju visokokvalitetnih audio i signalnih kabela te konektora. Njihova paleta proizvoda jamči visoku vjernost signala i trajnost, osiguravajući da vaš zvuk ostane čist i neometan. Kada je važno održavati kvalitetu zvuka, the sssnake je brend kojem se možete pouzdati.'),
(35, 'the t.amp', 'the t.amp je priznati proizvođač visokokvalitetnih pojačala i audio procesora. Njihovi proizvodi nude moćne performanse i preciznost u kontroli zvuka, čineći ih ključnim alatom za profesionalce u ozvučavanju i produkciji.'),
(36, 'the t.bone', 'the t.bone je poznat po svojim visokokvalitetnim mikrofonima i mikrofonskim dodacima. Njihovi proizvodi pružaju izvanrednu jasnoću i preciznost u snimanju zvuka, što ih čini odličnim izborom za glazbenike, snimatelje i inženjere zvuka.'),
(37, 'the t.mix', 'the t.mix je brend koji se ističe po svojim profesionalnim audio mixerima i audio procesorima. Njihova paleta proizvoda omogućuje vam kontrolu nad zvukom i audio signalima, čineći svaki nastup ili snimanje dosljedno izvanrednim.'),
(38, 'the t.racks', 'the t.racks je specijalist za signalnu obradu i procesiranje zvuka. Njihova linija audio procesora, ekvalizatora i efekata pruža vam alate za oblikovanje zvuka prema vašim željama i potrebama. Kada se radi o preciznoj zvučnoj obradi, the t.racks je profesionalni izbor.'),
(39, 'Thomann', 'Thomann je renomirana online trgovina glazbenom opremom sa sjedištem u Njemačkoj. Njihova ponuda obuhvaća širok spektar glazbenih instrumenata, audio opreme i dodataka. S visokom reputacijom i odličnom uslugom, Thomann je destinacija za glazbenike i entuzijaste širom svijeta.'),
(40, 'Thon', 'Thon se ističe kao specijalist za izradu visokokvalitetnih flight case-ova i zaštitnih kućišta za glazbene instrumente i opremu. Njihova prilagodljiva i izdržljiva rješenja štite vašu opremu od oštećenja tijekom prijevoza i rukovanja. Kada želite osigurati siguran transport vaše opreme, Thon je brend na kojeg se možete osloniti.'),
(41, 'Varytec', 'Varytec je specijalist za scensku rasvjetu i svjetlosne efekte. Njihova paleta proizvoda uključuje inovativne svjetlosne uređaje i efekte koji dodaju dramatičan vizualni element svakoj produkciji ili događanju. Varytec vam omogućuje stvaranje nevjerojatnih svjetlosnih ambijenata koji će ostaviti snažan dojam.'),
(42, 'Yamaha', 'Yamaha je svjetski poznat brend koji nudi vrhunsku glazbenu i audio opremu. Njihova ponuda uključuje glazbene instrumente, audio sustave, zvučnike i mnoge druge proizvode koji se ističu po kvaliteti i izdržljivosti. Yamaha je sinonim za pouzdanost i izvrsnost u glazbenoj industriji, bilo da ste glazbenik, inženjer zvuka ili producent.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `product` int(4) DEFAULT NULL,
  `status` varchar(6) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `date`, `time`, `product`, `status`) VALUES
(1, 'Iva', 'iva.ivic@tvz.hr', 'Pozdrav, zanima me cijena dostave za otoke? Unaprijed hvala!', '2023-08-14', '08:19:38', NULL, 'unread'),
(3, 'Luka', 'luka123vavra@gmail.com', 'Poštovani, zanima me dostupnost ovog proizvoda. Zanima me ima li proizvod uključen digitalni procesor zvuka i koji je frekvencijski raspon reprodukcije? Dolazi li uz proizvod i kompatibilni napojni kabel? Molim Vas cijenu dostave za kupnju dva komada ovog proizvoda. Hvala i pozdrav!', '2023-02-04', '18:18:11', 17, 'read'),
(4, 'Ana', 'ana.novak@gmail.com', 'Zanima me cijena navedenog proizvoda.', '2023-10-03', '12:51:18', 18, 'unread'),
(6, 'Mateo', 'mateo.mateicic@gmail.com', 'Poštovani, dolazi li uz ovaj proizvod i uputstvo za korištenje? Hvala i lijep pozdrav!', '2022-09-15', '23:07:28', 74, 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(10, 'luka123vavra@gmail.com'),
(15, 'lvavra@tvz.hr'),
(22, 'luka.novak@gmail.com'),
(23, 'ana.horvat@hotmail.com'),
(25, 'ivana.bozic@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `userSurname` varchar(40) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `total_price` int(20) NOT NULL,
  `products` mediumtext NOT NULL,
  `products_IDs` mediumtext NOT NULL,
  `products_manufacturers` mediumtext NOT NULL,
  `products_prices` mediumtext NOT NULL,
  `products_total_prices` mediumtext NOT NULL,
  `products_quantities` mediumtext NOT NULL,
  `submit_date` date NOT NULL,
  `submit_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userName`, `userSurname`, `userEmail`, `total_price`, `products`, `products_IDs`, `products_manufacturers`, `products_prices`, `products_total_prices`, `products_quantities`, `submit_date`, `submit_time`) VALUES
(7, 'Luka', 'Vavra', 'lvavra@tvz.hr', 797, 'Powercord UK C13,BS-2011 MK II,PA 502,B112D', '22,50,43,42', 'the sssnake,Millenium,the box,Behringer', '\r\n                3.59,\r\n                29.00,\r\n                218.00,\r\n                239.00', '14.36,87,218,478', '4,3,1,2', '2023-05-29', '22:54:28'),
(8, 'Luka', 'Vavra', 'lvavra@tvz.hr', 973, 'PA 502,B112D,MA120 MKII', '43,42,45', 'the box,Behringer,the box', '\r\n                218.00,\r\n                239.00,\r\n                149.00', '436,239,298', '2,1,2', '2023-05-29', '22:55:58'),
(12, 'Luka', 'Vavra', 'lvavra@tvz.hr', 689, 'Eurolive B212D,PicoSpot 20 LED', '1,52', 'Behringer,Fun Generation', '\r\n                278.00,133', '556,133', '2,1', '2023-05-29', '23:23:01'),
(13, 'Luka', 'Vavra', 'lvavra@tvz.hr', 822, 'Eurolive B212D,PicoSpot 20 LED', '1,52', 'Behringer,Fun Generation', '\r\n                278.00,133', '556,266', '2,2', '2023-05-29', '23:24:08'),
(14, 'Luka', 'Vavra', 'lvavra@tvz.hr', 822, 'Eurolive B212D,PicoSpot 20 LED', '1,52', 'Behringer,Fun Generation', '\r\n                278.00,133', '556,266', '2,2', '2023-05-29', '23:24:25'),
(15, 'Ana', 'Horvat', 'ana.horvat@gmail.com', 666, 'Mixstream Pro+', '54', 'Numark', '666', '666', '1', '2023-05-30', '19:47:47'),
(16, 'Ana', 'Horvat', 'ana.horvat@gmail.com', 1305, 'ZED-14', '55', 'Allen & Heath', '435', '1305', '3', '2023-05-30', '19:48:15'),
(17, 'Ana', 'Horvat', 'ana.horvat@gmail.com', 436, 'PA 502', '43', 'the box', '218', '436', '2', '2023-05-30', '19:48:43'),
(18, 'Ana', 'Horvat', 'ana.horvat@gmail.com', 931, 'MA120 MKII,Mixstream Pro+,YPK2030', '32,54,24', 'the box,Numark,the sssnake', '\r\n                131.12,666,3.49', '262.24,666,3.49', '2,1,1', '2023-06-27', '22:52:10'),
(19, 'Luka', 'Vavra', 'lvavra@tvz.hr', 1571, 'Mixstream Pro+,B112D', '54,42', 'Numark,Behringer', '\r\n                666.00,239', '1332,239', '2,1', '2023-09-27', '21:42:38'),
(20, 'Luka', 'Vavra', 'lvavra@tvz.hr', 1112, 'Eurolive B212D', '1', 'Behringer', '\r\n                278.00', '1112', '4', '2023-09-27', '21:44:45'),
(21, 'Luka', 'Vavra', 'lvavra@tvz.hr', 2054, 'Four,Eurolive B212D,SM6RD', '70,1,34', 'Rane,Behringer,the sssnake', '1599,\r\n                222.40,\r\n                5.30', '1599,444.8,10.6', '1,2,2', '2024-01-24', '21:45:31'),
(22, 'Ivana', 'Božić', 'ivana.bozic@gmail.com', 2054, 'Four,Eurolive B212D,SM6RD', '70,1,34', 'Rane,Behringer,the sssnake', '1599,\r\n                222.40,\r\n                5.30', '1599,444.8,10.6', '1,2,2', '2024-01-24', '21:47:52'),
(23, 'Ivana', 'Božić', 'ivana.bozic@gmail.com', 23, 'TPM 6', '46', 'pro snake', '7.3', '7.3', '1', '2024-01-25', '00:35:31'),
(24, 'Ivana', 'Božić', 'ivana.bozic@gmail.com', 1245, 'Xti 4002', '99', 'Crown', '1245', '1245', '1', '2024-01-25', '00:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(12) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `manufacturer` varchar(30) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `speakerType` varchar(20) DEFAULT NULL,
  `drivers` varchar(100) DEFAULT NULL,
  `RMS` int(4) DEFAULT NULL,
  `maxPower` int(4) DEFAULT NULL,
  `soundPressure` int(4) DEFAULT NULL,
  `maxFrequency` int(3) DEFAULT NULL,
  `minFrequency` int(5) DEFAULT NULL,
  `dimensions` varchar(24) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `imageURL1` varchar(200) DEFAULT NULL,
  `imageURL2` varchar(200) DEFAULT NULL,
  `imageURL3` varchar(200) DEFAULT NULL,
  `salesCount` int(4) NOT NULL DEFAULT 0,
  `faders` int(3) DEFAULT NULL,
  `inputs` int(3) DEFAULT NULL,
  `outputs` int(3) DEFAULT NULL,
  `cableType` varchar(20) DEFAULT NULL,
  `length` float DEFAULT NULL,
  `leftJack` varchar(12) DEFAULT NULL,
  `leftJackType` varchar(6) DEFAULT NULL,
  `rightJack` varchar(12) DEFAULT NULL,
  `rightJackType` varchar(6) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `limiter` varchar(2) DEFAULT NULL,
  `channels` int(3) DEFAULT NULL,
  `power` int(6) DEFAULT NULL,
  `lightSource` varchar(60) DEFAULT NULL,
  `powerConsumption` int(5) DEFAULT NULL,
  `lightType` varchar(16) DEFAULT NULL,
  `beamAngle` varchar(10) DEFAULT NULL,
  `discount` int(3) NOT NULL DEFAULT 0,
  `caseFor` varchar(60) DEFAULT NULL,
  `caseType` varchar(14) DEFAULT NULL,
  `accessoryType` varchar(14) DEFAULT NULL,
  `description` varchar(800) DEFAULT NULL,
  `additionalLine1` varchar(30) DEFAULT NULL,
  `additionalLineValue1` varchar(200) DEFAULT NULL,
  `additionalLine2` varchar(30) DEFAULT NULL,
  `additionalLineValue2` varchar(200) DEFAULT NULL,
  `additionalLine3` varchar(30) DEFAULT NULL,
  `additionalLineValue3` varchar(200) DEFAULT NULL,
  `softwareSupport` varchar(100) DEFAULT NULL,
  `deckNumber` int(4) DEFAULT NULL,
  `externalPowerSource` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `manufacturer`, `price`, `quantity`, `speakerType`, `drivers`, `RMS`, `maxPower`, `soundPressure`, `maxFrequency`, `minFrequency`, `dimensions`, `weight`, `imageURL1`, `imageURL2`, `imageURL3`, `salesCount`, `faders`, `inputs`, `outputs`, `cableType`, `length`, `leftJack`, `leftJackType`, `rightJack`, `rightJackType`, `color`, `limiter`, `channels`, `power`, `lightSource`, `powerConsumption`, `lightType`, `beamAngle`, `discount`, `caseFor`, `caseType`, `accessoryType`, `description`, `additionalLine1`, `additionalLineValue1`, `additionalLine2`, `additionalLineValue2`, `additionalLine3`, `additionalLineValue3`, `softwareSupport`, `deckNumber`, `externalPowerSource`) VALUES
(1, 'speakers', 'Eurolive B212D', 'Behringer', 278, 10, 'activeSpeaker', '12', 345, 550, 125, 18000, 65, '550 x 345 x 270', 14.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/246474/5351269_800.jpg', 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_24/246474/5351279_800.jpg', 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_24/246474/5351304_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, NULL, NULL, NULL, 'Behringer Eurolive B212D je aktivni zvučnik s visokokvalitetnim zvučnicima i ugrađenim pojačalom. Ovaj zvučnik pruža izvanrednu zvučnu izvedbu i snažan zvuk. Eurolive B212D je idealan za razne aplikacije, uključujući live nastupe, mobilno ozvučenje i DJ setove. Nudi čist i jasan zvuk s visokom razlučivošću.', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL),
(2, 'adapters', 'Adapter za slušalice', 'the t.bone', 2.66, 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/300470/12337492_800.jpg', NULL, NULL, 23, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Zlatna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the t.bone Adapter za slušalice je praktičan audio adapter koji omogućuje povezivanje različitih vrsta slušalica s različitim priključcima. Ovaj adapter vam omogućuje da koristite svoje slušalice s različitim uređajima, pružajući praktično rješenje za slušanje glazbe ili audio sadržaja.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'cables', 'SK366-2-RED Midi', 'the sssnake', 3, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/129093/9929056_800.jpg', NULL, NULL, 3, NULL, NULL, NULL, 'midiCable', 200, 'DIN 5-pin (m', 'male', 'DIN 5-pin (m', 'male', 'Crvena', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the sssnake SK366-2-RED Midi je MIDI kabel za povezivanje različitih MIDI uređaja. Ovaj kabel omogućuje siguran prijenos MIDI signala i pouzdanu komunikaciju između uređaja. SK366-2-RED Midi dolazi u crvenoj boji i lako se prepoznaje.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'speakers', 'Achat 115 M', 'the box pro', 525, 0, 'passiveSpeaker', '5\" bass + 1.4\" neoademijski mid-range/visokotonac (3\" voice coil)', 350, 1400, 131, 17000, 60, '438 x 440 x 766', 32, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/214529/14055747_800.jpg', NULL, NULL, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box pro Achat 115 M je pasivni zvučnik s visokokvalitetnim zvučnicima za snažan zvuk i visoku kvalitetu zvuka. Ovaj zvučnik je idealan za različite glazbene aplikacije, uključujući koncerte, klubove i live nastupe. Pruža visokokvalitetan zvuk i pouzdanost.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'speakers', 'Pyrit 15', 'the box', 249, 12, 'passiveSpeaker', '15\" bass + 1.7\" titanski kompresijski driver', 350, 1400, 128, 20000, 45, '462 x 397 x 780', 26.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/299646/7178788_800.jpg', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box Pyrit 15 je aktivni zvučnik s visokokvalitetnim zvučnicima i ugrađenim pojačalom. Ovaj zvučnik pruža impresivan zvuk i snažan bas. Pyrit 15 je idealan za koncerte, live nastupe i klubove gdje vam je potreban vrhunski zvuk.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'speakers', 'Achat 112 M', 'the box pro', 379, 8, 'passiveSpeaker', '12\" bass + 1.4\" neoademijski mid-range/visokotonac (3\" voice coil)', 350, 1400, 131, 18000, 60, '360 x 600 x 365', 21, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/230512/14060412_800.jpg', NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box pro Achat 112 M je pasivni zvučnik s visokokvalitetnim zvučnicima za snažan zvuk i kvalitetnu izvedbu. Ovaj zvučnik je idealan za žive nastupe, klubove i instalacije. Achat 112 M nudi visokokvalitetan zvuk s preciznošću.', 'Disperzija zvuka', '60° x 40°', 'Impedancija', '8 ohma', NULL, NULL, NULL, NULL, NULL),
(7, 'speakers', 'ELX 112', 'EV', 285, 6, 'passiveSpeaker', '12\" woofer/midrange + 1.5\" visokotonac', 250, 1000, 132, 20000, 55, '607 x 362 x 340', 15.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/264580/12872732_800.jpg', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'EV ELX 112 je pasivni zvučnik s visokokvalitetnim zvučnicima za izvrsnu zvučnu izvedbu. Ovaj zvučnik je savršen za koncerte, instalacije i glazbene događaje. ELX 112 pruža visokokvalitetan zvuk i jasnoću zvuka.', 'Disperzija zvuka', '90° x 50°', 'Impedancija', '8 ohma', NULL, NULL, NULL, NULL, NULL),
(8, 'speakers', 'PA 502', 'the box', 215, 10, 'passiveSpeaker', '15\" woofer + visokotonac sa 44 mm titanijskim driver-om', 300, 1200, 121, 20000, 35, '715 x 495 x 450', 25.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/160814/12315732_800.jpg', NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box PA 502 je svestran i kompaktan pasivni zvučnik s visokokvalitetnim zvučnicima. Ovaj zvučnik nudi izvrsnu zvučnu izvedbu i pouzdanost. PA 502 je idealan za različite aplikacije, uključujući kućne zabave, manje događaje i glazbene nastupe.', 'Disperzija zvuka', '50-100° x 55°', 'Impedancija', '8 ohma', 'Boja', 'Crna', NULL, NULL, NULL),
(9, 'speakers', 'ZLX 12', 'EV', 289, 4, 'passiveSpeaker', '12 woofer\" + 1,5\" visokotonac', 250, 1000, 125, 20000, 55, '610 x 356 x 356', 14.9, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/313074/13261991_800.jpg', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'EV ZLX 12 je aktivni zvučnik s visokokvalitetnim zvučnicima i ugrađenim pojačalom. Ovaj zvučnik nudi impresivan zvuk i jasnu zvučnu izvedbu. ZLX 12 je idealan za žive nastupe, koncerte i mobilne DJ setove. Nudi visokokvalitetan zvuk s lakoćom postavljanja i korištenja.', 'Disperzija zvuka', '90° x 60°', 'Impedancija', '8 ohma', NULL, NULL, NULL, NULL, NULL),
(10, 'speakers', 'S1 Pro System', 'Bose', 489, 12, 'activeSpeaker', '6\" woofer + 3x 2.25\" visokotonac', 160, 320, 103, 16000, 70, '330 x 241 x 286', 6.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/430651/12803077_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL, NULL, NULL, 'Bose S1 Pro System je kompaktan i prenosiv sistem za ozvučenje s visokokvalitetnim zvukom. Ovaj sistem je savršen za glazbenike i nastupe na terenu, omogućujući vam da zvuk dovedete tamo gdje ga trebate. Snažan zvuk i praktična prenosivost čine ga idealnim za manje koncerte, događaje i prezentacije.', 'Disperzija zvuka', '100° x 40°', 'Bluetooth', 'Da', 'Baterija', 'Punjiva baterija, autonomija rada do 11 sati', NULL, NULL, NULL),
(11, 'speakers', 'EON715', 'JBL', 599, 6, 'activeSpeaker', '15\" woofer + 1\" visokotonac', 650, 1300, 127, 20000, 60, '382 x 669 x 324', 14.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/531540/16959655_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'JBL EON715 je aktivni zvučnik s visokokvalitetnim zvučnicima i pojačalom. Ovaj zvučnik nudi izvrsnu zvučnu izvedbu i snagu. EON715 je idealan za glazbenike i ozvučitelje koji traže izvanredan zvuk za svoje nastupe. Prenosivost i praktičnost čine ga idealnim za mobilne nastupe i live evente.', 'Disperzija zvuka', '100° x 60°', 'Bluetooth', 'Da', 'Pojačalo', 'Class-D', NULL, NULL, NULL),
(12, 'speakers', 'DR112DSP', 'Behringer', 239, 10, 'activeSpeaker', '12\" woofer + 1.35\" kompresijski driver', 300, 1200, 134, 19000, 50, '602 x 359 x 359', 17, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/470895/14550818_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Behringer DR112DSP je aktivni zvučnik s ugrađenim pojačalom i digitalnim procesorom za zvuk. Ovaj zvučnik pruža visokokvalitetan zvuk i mogućnost preciznog podešavanja zvuka. DR112DSP je pogodan za različite glazbene aplikacije, uključujući live nastupe, klubove i koncerte.', 'Pojačalo', 'Class-D', 'Bluetooth', 'Da', 'Boja', 'Crna', NULL, NULL, NULL),
(13, 'speakers', 'DR115DSP', 'Behringer', 295, 10, 'activeSpeaker', '15\" woofer + 1.75\" kompresijski driver', 400, 1400, 136, 19000, 45, '687 x 422 x 390', 21.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/470896/17750808_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Behringer DR115DSP je aktivni zvučnik s ugrađenim pojačalom i digitalnim procesorom za zvuk. Ovaj zvučnik nudi visokokvalitetan zvuk i mogućnost preciznog podešavanja zvuka. DR115DSP je idealan za live nastupe, koncerte i druge događaje gdje se traži vrhunska zvučna izvedba.', 'Bluetooth', 'Da', 'Boja', 'Crna', 'Pojačalo', 'Class-D', NULL, NULL, NULL),
(14, 'speakers', 'K 8.2', 'QSC', 789, 4, 'activeSpeaker', '8\" Woofer + 1.4\" titanijski kompresijski driver', 500, 2000, 128, 20000, 55, '449 x 280 x 269', 12.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/412300/12133462_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'QSC K 8.2 je aktivni zvučnik s visokokvalitetnim zvučnicima i ugrađenim pojačalom. Ovaj zvučnik pruža izvanrednu zvučnu izvedbu i snagu. K 8.2 je idealan za koncerte, live nastupe i razne glazbene događaje gdje vam je potreban profesionalni zvuk.', 'Disperzija zvuka', '105°', 'Veličina stalka', '35 mm', 'Broj ulaza', '3', NULL, NULL, NULL),
(15, 'speakers', 'DSP 112', 'the box pro', 229, 14, 'activeSpeaker', '12\" woofer + 1\" kompresijski driver s 1.4\" voice coil', 300, 1200, 134, 19000, 53, '348 x 607 x 355', 14.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/401529/12238562_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box pro DSP 112 je aktivni zvučnik s visokokvalitetnim zvučnicima i ugrađenim digitalnim procesorom za zvuk. Ovaj zvučnik nudi snažan zvuk i precizno podešavanje zvuka za vrhunsku zvučnu izvedbu. DSP 112 je pogodan za koncerte, klubove i live nastupe gdje se traži izvanredan zvuk.', 'Disperzija zvuka', '90° x 60°', 'Pojačalo', 'Class-D', 'Boja', 'Crna', NULL, NULL, NULL),
(16, 'speakers', 'DSP 108', 'the box pro', 168, 4, 'activeSpeaker', '8\" woofer + 1\" kompresijski driver', 200, 600, 124, 19000, 61, '487 x 275 x 270', 6.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/454510/14605763_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, 'the box pro DSP 108 je aktivni zvučnik s visokokvalitetnim zvučnicima i ugrađenim digitalnim procesorom za zvuk. Ovaj zvučnik pruža visokokvalitetan zvuk i mogućnost prilagodbe zvuka prema potrebama. DSP 108 je savršen za live nastupe, koncerte i druge događaje gdje se zahtijeva vrhunska zvučna izvedba.', 'Disperzija zvuka', '90° x 60°', 'Boja', 'Crna', 'Pojačalo', 'Class D & Class AB', NULL, NULL, NULL),
(17, 'speakers', 'DSP 110', 'the box pro', 205, 14, 'activeSpeaker', '10\" woofer + 1\" kompresijski driver s 1.4\" voice coil', 250, 1000, 132, 19000, 58, '298 x 523 x 307', 13, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/401528/12293182_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box pro DSP 110 je aktivni zvučnik s visokokvalitetnim zvučnicima i ugrađenim digitalnim procesorom za zvuk. Ovaj zvučnik pruža izvanrednu zvučnu izvedbu i precizno podešavanje zvuka. DSP 110 je idealan za koncerte, klubove i instalacije gdje se zahtijeva visoka kvaliteta zvuka.', 'Disperzija zvuka', '90° x 60°', 'Boja', 'Crna', 'Pojačalo', 'Class D', NULL, NULL, NULL),
(18, 'accessories', 'BS-2211B MKII Set', 'Millenium', 44, 52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/304849/7104777_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 'stands', 'Millenium BS-2211B MKII Set je komplet koji uključuje dvije visokokvalitetne mikrofonske stalke. Ovi stalci omogućuju postavljanje mikrofona na željenu visinu i kut. BS-2211B MKII Set je idealan za snimanje, live nastupe i studijske sesije. Pruža stabilnost i podršku za vaše mikrofone.', 'Broj stalaka', '2', NULL, NULL, NULL, NULL, NULL, 0, NULL),
(19, 'cables', 'SM10BK', 'the sssnake', 6.9, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/128513/9507656_800.jpg', NULL, NULL, 12, NULL, NULL, NULL, 'microphoneCable', 1000, 'XLR 3-pin', 'female', 'XLR 3-pin', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the sssnake SM10BK je profesionalni XLR kabel s muškim i ženskim XLR priključcima. Ovaj kabel omogućuje pouzdan prijenos zvuka i koristi se za povezivanje različitih audio uređaja. SM10BK je izrađen od kvalitetnih materijala i pruža izvrsnu izvedbu.', NULL, NULL, 'Promjer', '6 mm', NULL, NULL, NULL, NULL, NULL),
(20, 'cables', 'SM6BK', 'the sssnake', 5.3, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/128512/8584486_800.jpg', NULL, NULL, 15, NULL, NULL, NULL, 'microphoneCable', 600, 'XLR 3-pin', 'female', 'XLR 3-pin', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the sssnake SM6BK je visokokvalitetni XLR kabel s muškim i ženskim XLR priključcima. Ovaj kabel je izrađen od kvalitetnih materijala i osigurava čist i pouzdan prijenos zvuka. SM6BK je savršen za povezivanje mikrofona, zvučnika i drugih audio uređaja.', 'Promjer', '6 mm', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'cables', 'TPM 10', 'pro snake', 9.8, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/213367/11370589_800.jpg', NULL, NULL, 9, NULL, NULL, NULL, 'microphoneCable', 1000, 'XLR', 'female', 'XLR', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'pro snake TPM 10 je profesionalni XLR kabel duljine 10 metara. Ovaj kabel ima muški i ženski XLR priključak te je idealan za povezivanje mikrofona, zvučnika i drugih audio uređaja. TPM 10 nudi visokokvalitetne vodiče i izolaciju za čist i pouzdan prijenos zvuka na duge udaljenosti.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'cables', 'Powercord UK C13', 'the sssnake', 3.99, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/110068/9193875_800.jpg', NULL, NULL, 32, NULL, NULL, NULL, 'powerCable', 150, 'UK utikač', 'male', 'C13', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, 'the sssnake Powercord UK C13 je kabel za napajanje s britanskim priključkom i priključkom tipa C13. Ovaj kabel je idealan za povezivanje audio opreme s britanskim električnim sustavom. Pruža siguran i stabilan izvor napajanja za vašu opremu.', 'Zaštita', '13 A fuse', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'cables', 'Mains Power Cable', 'the sssnake', 6.2, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/175751/10823761_800.jpg', NULL, NULL, 11, NULL, NULL, NULL, 'powerCable', 500, 'EU utikač', 'male', 'C13', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the sssnake Mains Power Cable je kvalitetni kabel za napajanje koji se koristi za povezivanje audio opreme s električnom energijom. Ovaj kabel je izrađen od kvalitetnih materijala i osigurava siguran i stabilan rad vaše opreme.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'cables', 'YPK2030', 'the sssnake', 3.49, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/153180/12432662_800.jpg', NULL, NULL, 7, NULL, NULL, NULL, 'audioCable', 300, ' 2x 6.3 mm M', 'male', '3.5 mm Stere', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the sssnake YPK2030 je visokokvalitetni Y-kabel s muškim i dva ženska XLR priključka. Ovaj kabel omogućuje podjelu audio signala na dva izlaza, što je korisno u različitim audio situacijama. YPK2030 pruža čist i pouzdan prijenos zvuka.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'accessories', 'V2020 Black 10 Pack', 'Thomann', 6.3, 160, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/105250/6961661_800.jpg', NULL, NULL, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'other', '', 'Dimenzije', '20 x 200 mm', 'Za kablove', 'Do 10 m', NULL, NULL, NULL, NULL, NULL),
(26, 'speakers', 'Dave 18 G4X', 'LD Systems', 1769, 6, 'speakerBundle', '18\" subwoofer + 2x 8\" satelit zvučnika', 2000, 4000, 134, 20000, 30, 'Više dimenzija', 63.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/557059/17988703_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'LD Systems Dave 18 G4X je profesionalni subwoofer s visokokvalitetnim zvučnicima i pojačalom. Ovaj subwoofer pruža dubok i moćan niskofrekvencijski odziv za impresivnu zvučnu izvedbu. Dave 18 G4X je idealan za koncerte, klubove i žive nastupe gdje vam je potreban snažan bas.', 'Disperzija zvuka', '90° x 30°', 'Subwoofer dimenzije', '665 x 545 x 640 mm', 'Satelit zvučnik dimenzija', '260 x 275 x 470 mm', NULL, NULL, NULL),
(27, 'speakers', 'EON 715 Power Bundle', 'JBL', 3444, 10, 'speakerBundle', '2x 18\" woofer + 2x 15\" woofer i 1\" visokotonac', 2800, 5600, 134, 20000, 40, 'Više dimenzija', 103, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/532960/16823683_800.jpg', NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'JBL EON 715 Power Bundle je komplet koji uključuje JBL EON 715 aktivni zvučnik i pripadajući dodatni pribor. Ovaj aktivni zvučnik nudi visokokvalitetan zvuk i snagu. Power Bundle je idealan za glazbenike i ozvučitelje koji traže izvanredan zvuk za svoje nastupe.', 'Subwoofer dimenzija', '609 x 667 x 637 mm', 'Satelit zvučnik dimenzija', '382 x 669 x 324 mm', 'Dodatna oprema', '2x stalak + 2x XLR kabel', NULL, NULL, NULL),
(28, 'speakers', 'CL 106/112MKII Basis Bundle', 'the box', 559, 10, 'speakerBundle', '12\" subwoofer + 2x 6.5\" woofer + kompresijski driver', 320, 1100, 118, 19000, 40, 'Više dimenzija', 45, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/350772/9191760_800.jpg', NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box CL 106/112MKII Basis Bundle je komplet koji uključuje dvije pasivne zvučničke kutije (CL 106 i CL 112MKII) za ozvučenje. Ovaj set pruža izvanrednu zvučnu izvedbu i moć za različite glazbene događaje, koncerte i instalacije. Kutije su kompaktne i jednostavne za korištenje, čineći ih idealnim za profesionalce u audio industriji.', 'Disperzija zvuka', '90° x 60°', 'Subwoofer dimenzija', '420 x 520 x 500 mm', 'Satelit zvučnik dimenzija', ' 250 x 230 x 375 mm', NULL, NULL, NULL),
(29, 'speakers', 'CL 108/115MKII Basis Bundle', 'the box', 729, 4, 'speakerBundle', '15\" woofer + 2x  8\" woofer + 1\" kompresijski driver', 520, 1700, 122, 19000, 35, 'Više dimenzija', 58, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/350775/9191790_800.jpg', NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box CL 108/115MKII Basis Bundle je komplet koji uključuje dvije pasivne zvučničke kutije (CL 108 i CL 115MKII) za ozvučenje. Ovaj set nudi snažan i kvalitetan zvuk za live nastupe, koncerte i klubove. Kutije su kompaktne i lako prenosive, čineći ih praktičnim rješenjem za glazbenike i inženjere zvuka.', 'Subwoofer dimenzija', '460 x 630 x 610 mm', 'Satelit zvučnik dimenzija', '280 x 250 x 415 mm', 'Disperzija zvuka', '90° x 60°', NULL, NULL, NULL),
(30, 'speakers', 'Achat 112 Sub A & DSP108 Set', 'the box pro', 990, 10, 'speakerBundle', '2x 12\" Subwoofer + 2x 8\" woofer + 1\" kompresijski driver ', 1100, 2600, 124, 18000, 40, 'Više dimenzija', 59.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/478977/14632136_800.jpg', NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box pro Achat 112 Sub A & DSP108 Set je komplet koji uključuje aktivni subwoofer (Achat 112 Sub A) i DSP zvučnik (DSP108) za izvanredno ozvučenje. Ovaj set pruža snažan niskofrekvencijski odziv i visokokvalitetan zvuk za razne aplikacije, uključujući koncerte, live nastupe i instalacije.', 'Subwoofer dimenzija', '450 x 380 x 456 mm', 'Satelit zvučnik dimenzija', '487 x 275 x 270 mm', 'Disperzija zvuka', '90° x 60°', NULL, NULL, NULL),
(31, 'speakers', 'DSX 110 M', 'the box pro', 199, 6, 'monitorSpeaker', '10\" woofer + 1.35\" koaksijalan driver', 300, 900, 130, 18000, 60, '450 x 535 x 403', 14.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/505046/16368648_800.jpg', NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, 'the box pro DSX 110 M je kompaktni i svestrani pasivni zvučnik s visokokvalitetnim zvučnicima. Ovaj zvučnik nudi izvrsnu zvučnu izvedbu i snagu. DSX 110 M je savršen za manje koncerte, klubove i instalacije. Pruža visokokvalitetan zvuk s preciznošću.', 'Disperzija zvuka', '60° x 60°', 'Otvor za stalak', '36 mm', 'Pojačalo', 'Class D + AB', NULL, NULL, NULL),
(32, 'speakers', 'MA120 MKII', 'the box', 149, 4, 'monitorSpeaker', '12\" Woofer + visokotonac', 120, 240, 120, 16000, 80, '370 x 580 x 420', 16.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/195950/7228139_800.jpg', NULL, NULL, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, 'the box MA120 MKII je osobni monitor s ugrađenim pojačalom i zvučnikom. Ovaj monitor nudi visokokvalitetan zvuk za glazbenike tijekom nastupa. MA120 MKII je kompaktan i jednostavan za korištenje, omogućujući glazbenicima da čuju svoj nastup jasno i precizno.', 'Kućište', 'Drvo', 'Broj ulaza', '2', NULL, NULL, NULL, NULL, NULL),
(33, 'accessories', 'Stage Tape 400BK', 'Stairville', 3.99, 78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/154244/10404437_800.jpg', NULL, NULL, 52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'other', 'Stairville Stage Tape 400BK je visokokvalitetna traka za fiksiranje kabela i opreme na pozornici. Ova traka je izuzetno ljepljiva i otporna na habanje, čineći je savršenim alatom za organizaciju i osiguranje kabela tijekom događanja i nastupa. Stage Tape 400BK dolazi u crnoj boji i lako se primjenjuje i uklanja bez ostavljanja ljepljivih ostataka.', 'Dužina', '50 m', 'Širina', '50 mm', 'Boja', 'Crna', NULL, NULL, NULL),
(34, 'cables', 'SM6RD', 'the sssnake', 5.3, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/158895/8585436_800.jpg', NULL, NULL, 26, NULL, NULL, NULL, 'microphoneCable', 600, 'XLR', 'female', 'XLR', 'male', 'Crvena', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the sssnake SM6RD je pouzdan i izdržljiv XLR kabel s muškim i ženskim XLR priključcima. Ovaj kabel je savršen za povezivanje mikrofona, zvučnika i drugih audio uređaja. SM6RD je izrađen od kvalitetnih materijala i pruža siguran i čist prijenos zvuka.', 'Presjek žice', '2 x 0.22 mm²', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'cables', 'SK233-1,5 XLR Patch', 'the sssnake', 4.11, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/132005/9930116_800.jpg', NULL, NULL, 7, NULL, NULL, NULL, 'microphoneCable', 150, 'XLR', 'female', 'XLR', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the sssnake SK233-1,5 je visokokvalitetni XLR patch kabel s muškim i ženskim XLR priključcima. Ovaj kabel je idealan za povezivanje audio uređaja, mikrofona i miksera. S kvalitetnim vodičima i izolacijom, SK233-1,5 osigurava čist i pouzdan prijenos zvuka na profesionalnoj razini.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'speakers', 'B615D', 'Behringer', 355, 20, 'activeSpeaker', '15\" woofer + 1.75\" kompresijski driver', 500, 1500, 126, 18000, 60, '732 x 470 x 424', 29.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/280265/14837521_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Behringer B615D je aktivni zvučnik s visokokvalitetnim zvučnicima, ugrađenim pojačalom i bežičnim mogućnostima. Ovaj zvučnik nudi moćan zvuk i jasnu zvučnu izvedbu. S bežičnim prijemnikom, B615D omogućuje jednostavno povezivanje s bežičnim mikrofonima i izvorima zvuka. Idealan je za veće događaje, koncerte i žive nastupe.', 'Boja', 'Crna', 'Kućište', 'Plastika', NULL, NULL, NULL, NULL, NULL),
(37, 'speakers', 'Achat 112 A', 'the box pro', 715, 10, 'activeSpeaker', '15\" woofer + 1.75\" kompresijski driver', 600, 1200, 135, 17000, 63, '550 x 600 x 718', 43, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/325263/14057952_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box pro Achat 112 A je aktivni zvučnik s visokokvalitetnim zvučnicima i ugrađenim pojačalom. Ovaj zvučnik nudi izvrsnu zvučnu izvedbu i snagu. Achat 112 A je savršen za razne aplikacije, uključujući manje koncerte, klubske nastupe i instalacije. Pruža visokokvalitetan zvuk s preciznošću.', 'Disperzija zvuka', '55° x 40°', 'Boja', 'Crna', NULL, NULL, NULL, NULL, NULL),
(38, 'speakers', 'PA 302 A', 'the box', 266, 10, 'activeSpeaker', '12\" woofer + VCD visokotonac', 400, 800, 120, 18000, 50, '600 x 415 x 390', 23, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/160813/12651136_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box PA 302 A je pasivni zvučnik s visokokvalitetnim zvučnicima i kompaktnim dizajnom. Ovaj zvučnik pruža izvrsnu zvučnu izvedbu i pouzdanost. PA 302 A je idealan za manje koncerte, događaje i instalacije. Pruža visokokvalitetan zvuk i moćnu reprodukciju glazbe.', 'Disperzija zvuka', '55 x 55° -100°', 'Boja', 'Crna', 'Kućište', 'Plastika', NULL, NULL, NULL),
(39, 'speakers', 'B115W', 'Behringer', 345, 10, 'activeSpeaker', '15\" woofer + 1\" visokotonac', 250, 1000, 128, 20000, 45, '713 x 427 x 313', 17.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/319596/14413009_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Behringer B115W je aktivni zvučnik s ugrađenim pojačalom i bežičnim mogućnostima. Ovaj zvučnik nudi visokokvalitetnu zvučnu izvedbu i izvanredan zvuk. S integriranim bežičnim prijemnikom, B115W omogućuje praktično i jednostavno povezivanje s bežičnim mikrofonima i izvorima zvuka. Idealan je za mobilne DJ-e, live nastupe i razne događaje gdje vam je potreban snažan i kvalitetan zvuk.', 'Bluetooth', 'Da', 'Boja', 'Crna', 'Kućište', 'Plastika', NULL, NULL, NULL),
(40, 'speakers', 'ZLX 12P', 'EV', 435, 10, 'activeSpeaker', ' 12\" woofer + 1.5\" kompresijski driver', 250, 1000, 125, 20000, 55, '610 x 356 x 356', 15.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/313039/14407389_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'EV ZLX 12P je aktivni zvučnik s visokokvalitetnim zvučnicima i ugrađenim pojačalom. Ovaj zvučnik nudi izvanrednu zvučnu izvedbu i pouzdanost. ZLX 12P je idealan za koncertne dvorane, klubove i žive nastupe. Nudi čist i snažan zvuk s visokom razlučivošću.', 'Disperzija zvuka', '90° x 60°', 'Pojačalo', 'Class D', 'Kućište', 'Polipropilen plastika', NULL, NULL, NULL),
(41, 'speakers', 'Mon A12', 'the box pro', 348, 8, 'monitorSpeaker', '12\" woofer + 1,35\" koaksijalni visokotonac', 350, 700, 124, 20000, 50, '510 x 340 x 500', 15, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/309205/7360603_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box pro Mon A12 je profesionalni aktivni monitor s visokokvalitetnim zvučnicima i pojačalom. Ovaj monitor pruža precizno reprodukciju zvuka i visokokvalitetnu izvedbu. Mon A12 je idealan za glazbenike, producente i inženjere zvuka koji traže kvalitetan zvuk tijekom snimanja i miksanja.', 'Disperzija zvuka', '80° x 80°', 'Boja', 'Crna', 'Kućište', 'Drvo', NULL, NULL, NULL),
(42, 'speakers', 'B112D', 'Behringer', 239, 9, 'activeSpeaker', '12\" woofer + 1,35\" kompresijski driver', 350, 1000, 128, 20000, 50, '568 x 342 x 270', 12.3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_28/284049/15160138_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Behringer B112D je aktivni zvučnik s ugrađenim pojačalom i visokotoncem. Ovaj zvučnik nudi izvanrednu zvučnu izvedbu i snažan zvuk. B112D je pogodan za razne aplikacije, uključujući žive nastupe, DJ setove i mobilne ozvučenje. S lakoćom se postavlja i kontrolira, čineći ga izborom mnogih glazbenika.', 'Boja', 'Siva', 'Kućište', 'Plastika', 'Utor za stalak', '35 mm', NULL, NULL, NULL),
(43, 'speakers', 'PA 502', 'the box', 218, 6, 'passiveSpeaker', '15\" woofer + horn sa 44 mm titanijskim driver-om', 300, 600, 122, 20000, 35, '715 x 495 x 450', 25.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/160814/12315732_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box PA 502 je svestran i kompaktan pasivni zvučnik s visokokvalitetnim zvučnicima. Ovaj zvučnik nudi izvrsnu zvučnu izvedbu i pouzdanost. PA 502 je idealan za različite aplikacije, uključujući kućne zabave, manje događaje i glazbene nastupe.', 'Boja', 'Crna', 'Kućište', 'Plastika', NULL, NULL, NULL, NULL, NULL),
(44, 'speakers', 'Achat 204 A', 'the box pro', 133, 6, 'activeSpeaker', ' 2x 4\" woofer + 1\" Fabric dome visokotonac', 80, 320, 112, 20000, 90, '172 x 142 x 360', 4.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/375150/17386838_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box pro Achat 204 A je aktivni zvučnik s dva woofera i visokotoncem, dizajniran za izvanrednu zvučnu izvedbu. Ovaj zvučnik nudi snažan zvuk i širok frekvencijski raspon, čineći ga idealnim za žive nastupe, klubove i instalacije. Achat 204 A pruža visoku kvalitetu zvuka i snagu.', 'Disperzija zvuka', '90° x 90°', 'Boja', 'Crna', 'Kućište', 'Drvo', NULL, NULL, NULL),
(45, 'speakers', 'MA120 MKII', 'the box', 149, 12, 'monitorSpeaker', '12\" woofer + visokotonac', 120, 240, 120, 16000, 80, '370 x 580 x 420', 16.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/195950/7228139_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box MA120 MKII je kompaktni osobni monitor s ugrađenim pojačalom i zvučnikom. Ovaj monitor pruža visokokvalitetan zvuk za glazbenike tijekom nastupa. MA120 MKII je jednostavan za korištenje i omogućuje vam da čujete svoj performans jasno i precizno.', 'Kućište', 'Drvo', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'cables', 'TPM 6', 'pro snake', 7.3, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/213368/8608147_800.jpg', NULL, NULL, 23, NULL, NULL, NULL, 'microphoneCable', 600, 'XLR', 'female', 'XLR', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'pro snake TPM 6 je kvalitetni XLR kabel s muškim i ženskim XLR priključcima. Ovaj kabel je savršen za povezivanje mikrofona, zvučnika i drugih audio uređaja. S visokokvalitetnim vodičima i izolacijom, TPM 6 pruža čist i pouzdan prijenos zvuka.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'accessories', 'MS 2003', 'Millenium', 14.9, 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/133136/13413261_800.jpg', NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'stands', 'Millenium MS 2003 je teleskopski mikrofonski stalak s podesivom visinom i nagibom. Ovaj stalak omogućuje precizno postavljanje mikrofona prema potrebama vašeg nastupa ili snimanja. Izdržljiva konstrukcija osigurava stabilnost i podršku za vaš mikrofon.', 'Visina', '105 - 170 cm', 'Prilagodljiv držač', '75 cm', 'Boja', 'Crna', NULL, NULL, NULL),
(48, 'adapters', '1820 Adapter', 'the sssnake', 0.7, 124, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/128509/12321232_800.jpg', NULL, NULL, 34, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Siva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the sssnake 1820 Adapter je praktičan audio adapter kabel s muškim XLR priključkom na jednom kraju i ženskim XLR priključkom na drugom kraju. Ovaj adapter je savršen za produživanje XLR kabela i povezivanje različitih audio uređaja. Izrađen je od kvalitetnih materijala za čistu i pouzdanu audio reprodukciju.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'accessories', 'BS-2020S MK II', 'Millenium', 29, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/299891/13055834_800.jpg', NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'stands', 'Millenium BS-2020S MK II je kompaktan i stabilan mikrofonski stalak sa špagom za mikrofone. Ovaj stalak pruža siguran oslonac za vaše mikrofone i omogućuje precizno postavljanje visine i kutova. Idealan je za snimanje i miksanje u studiju i na pozornici.', 'Materijal', 'Metal', 'Boja', 'Crna', 'Nosivost', '35 kg', NULL, NULL, NULL),
(50, 'accessories', 'BS-2011 MK II', 'Millenium', 29, 48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/323921/14688941_800.jpg', NULL, NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'stands', 'Millenium BS-2011 MK II je visokokvalitetni mikrofonski stalak koji nudi stabilnost i podršku za vaše mikrofone. Ovaj stalak ima podesivu visinu i nagib te je idealan za upotrebu u studiju, na pozornici ili za snimanje. Izdržljiva konstrukcija čini ga pouzdanim partnerom za vašu audio opremu.', 'Boja', 'Crna', 'Promjer', '35 mm', 'Nosivost', '30 kg', NULL, NULL, NULL),
(51, 'amplifiers', 'TA 2400 MK-X', 'the t.amp', 333, 24, NULL, NULL, NULL, NULL, NULL, 0, 0, '420 x 450 x 95', 19.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/156557/15007245_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 2, 2400, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the t.amp TA 2400 MK-X je snažan i pouzdan profesionalni pojačavač snage. Ovaj pojačavač nudi izvanrednu izlaznu snagu i pouzdanu zvučnu izvedbu. Idealno za ozvučenje koncertnih dvorana, PA sustava i ostalih aplikacija gdje je potrebna visoka snaga i kvaliteta zvuka.', 'RMS 4 ohma', '2x 1200 W', 'RMS 8 ohma', '2x 760 W', 'Pojačalo', 'Class AB', NULL, NULL, NULL),
(52, 'light', 'PicoSpot 20 LED', 'Fun Generation', 133, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '174 x 162 x 242', 3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/372642/13714511_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1x 12 W CREE', 35, 'movingHeadSpot', '13', 0, NULL, NULL, NULL, 'Fun Generation PicoSpot 20 LED je kompaktni LED svjetlosni uređaj koji pruža dinamičnu i svjetlosnu izvedbu. Ovaj uređaj nudi različite svjetlosne efekte, boje i mogućnost DMX kontroliranja. PicoSpot 20 LED je savršen za manje pozornice, klubove i događaje gdje želite dodati svjetlosnu atmosferu.', 'Strobo efekt', '0-20 Hz', '3 DMX moda', '5 & 9 & 11 kanala', NULL, NULL, NULL, NULL, NULL),
(53, 'covers', 'Case Behringer B 207', 'Thomann', 53, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/486782/15618865_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Behringer B 207', 'flightCases', NULL, 'Thomann Case Behringer B 207 je profesionalni kofer dizajniran za prijenos i zaštitu Behringer B 207 synthesizera. Ovaj kofer nudi iznimnu zaštitu tijekom prijevoza i skladištenja, s izdržljivim materijalima i sigurnosnim bravama. Idealan za glazbenike i producente koji traže najbolju zaštitu za svoju opremu.', 'Dimenzije', '412 x 252 x 304 mm', 'Materijal', 'Aluminij + plastika', NULL, NULL, NULL, NULL, NULL),
(54, 'controllers', 'Mixstream Pro+', 'Numark', 666, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '566 x 74 x 284', 3.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/559714/17970162_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Numark Mixstream Pro+ je sve-u-jednom DJ kontroler i mikser koji pruža visoku funkcionalnost i kontrolu. Ovaj kontroler je opremljen visokokvalitetnim jog kotačima, drumpads-ima i ugrađenim efektima za kreativno miksanje. Mixstream Pro+ je savršen za DJ-e koji žele raznolikost i fleksibilnost u svojim nastupima.', NULL, NULL, NULL, NULL, NULL, NULL, 'Serato DJ Intro (Pro), Virtual DJ', 2, 'Da'),
(55, 'mixers', 'ZED-14', 'Allen and Heath', 435, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '384 x 95 x 465', 7.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/137330/11228955_800.jpg', NULL, NULL, 0, 99, 16, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Allen and Heath ZED-14 je kompaktan mikser s 14 kanala, idealan za glazbene produkcije, male nastupe i studijske snimke. Ovaj mikser nudi visoku zvučnu kvalitetu, ugrađene efekte i brojne funkcije za miksanje. S visokokvalitetnim pretpojačalima i iznimnom pouzdanošću, ZED-14 je odabir profesionalaca i glazbenih entuzijasta.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'covers', 'BS1 torba', 'thomann', 40, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_47/471699/14455899_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ' Bose S1 i Bose S1 Pro+ aktivne zvučne kutije', 'casesAndBags', NULL, 'Thomann BS1 torba je pouzdan i praktičan način za prijenos i zaštitu vaše audio opreme. Ova torba je dizajnirana za nošenje manjih audio uređaja, miksera ili dodatne opreme. S izdržljivim materijalima, udobnim ručkama i naramenicama, Thomann BS1 torba čini prijenos vaše opreme jednostavnim i sigurnim.', 'Dimenzije', '29 x 28 x 36 cm', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'accessories', 'USB Stick 16GB', 'Botex', 9.3, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_54/543182/17936570_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'storageUnits', 'Botex USB Stick 16GB je praktičan i kompaktan uređaj za pohranu podataka. S kapacitetom od 16 gigabajta, ovaj USB stick vam omogućuje da jednostavno prenosite, čuvate i dijelite svoje datoteke. Idealno rješenje za pohranu glazbe, slika, video materijala i ostalih podataka.', 'USB', '3.0', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'covers', 'Eco Wood 1210er', 'Fun Generation', 92, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_42/427665/12935354_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Siva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Technics SL 1210 i SL 1200', 'casesAndBags', NULL, 'Fun Generation Eco Wood 1210er su visokokvalitetne slušalice koje kombiniraju klasičan dizajn s izvanrednom zvučnom izvedbom. Ove slušalice pružaju izvanredan zvuk i vrhunsku udobnost, čineći ih idealnim izborom za ljubitelje glazbe i audio entuzijaste.', 'Dimenzija', '513 x 443 x 215 mm', 'Težina', '6.5 kg', NULL, NULL, NULL, NULL, NULL),
(59, 'covers', 'Case Pioneer CDJ-3000 PB', 'Thon', 169, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_54/542495/17610975_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pioneer CDJ-3000', 'flightCases', NULL, 'Thon Case Pioneer CDJ-3000 PB je profesionalni kofer dizajniran za prijenos i zaštitu Pioneer CDJ-3000 CD playera. Ovaj kofer nudi sigurnu i izdržljivu zaštitu za vašu opremu tijekom putovanja i nastupa. Izrađen je od visokokvalitetnih materijala i ima pjenastu unutrašnjost za dodatnu sigurnost.', 'Dimenzije', '410 x 590 x 216 mm', 'Težina', '6.5 kg', 'Težina s playerom', '12 kg', NULL, NULL, NULL),
(60, 'covers', 'Everse 8 Raincover', 'EV', 77, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_55/552510/18420232_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'EV Everse 8', 'covers', NULL, 'EV Everse 8 Raincover je pokrivalo koje pruža zaštitu od kiše i vremenskih uvjeta za zvučnik EV EVERSE 8. Ovo pokrivalo je posebno dizajnirano za zaštitu opreme od vlage i oluje tijekom vanjskih nastupa i događanja.', 'Vodootporno', 'Da', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'covers', 'EVERSE 8 Tote', 'EV', 99, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_57/575179/18536958_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'EVERSE 8', 'casesAndBags', NULL, 'EV EVERSE 8 Tote je torba za prijenos zvučnika EV EVERSE 8. Ova torba pruža siguran i praktičan način prijevoza zvučnika tijekom nastupa i prijenosa opreme. Izrađena je od izdržljivih materijala i dolazi s ručkom za jednostavno nošenje.', 'Težina', '1.15 kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'covers', 'Bose S1 PRO Bag Premium', 'Thomann', 40, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_48/484091/15297143_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Bose S1 PRO i Bose S1 Pro+', 'casesAndBags', NULL, 'Thomann Bose S1 PRO Bag Premium je premium torba za prijenos Bose S1 Pro zvučnika. Ova torba omogućuje siguran prijevoz zvučnika i dodatnog pribora. Izrađena je od kvalitetnih materijala i dolazi s udobnim ručkama i naramenicama za lakši transport.', 'Dimenzije', '270 x 310 x 350 mm', 'Vodootporno', 'Da', NULL, NULL, NULL, NULL, NULL),
(63, 'covers', 'S1 Pro Slip Cover', 'Bose', 29, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_46/460174/13892866_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Bose S1 Pro i Bose S1 Pro+', 'casesAndBags', NULL, 'Bose S1 Pro Slip Cover je prilagođena navlaka za Bose S1 Pro zvučnik. Ova navlaka pruža zaštitu od prašine, ogrebotina i manjih oštećenja tijekom prijevoza ili skladištenja. Slip Cover je izrađen od kvalitetnih materijala i dolazi s ručkom za lakše nošenje.', 'Materijal', 'Najlon', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'covers', 'Mix Case CD/Mixer', 'Thomann', 71, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_41/410003/12131497_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Siva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Mikseri i CD playeri', 'flightCases', NULL, 'Thomann Mix Case CD/Mixer je izdržljiv kofer za CD player i mikser. Ovaj kofer pruža pouzdanu zaštitu za vašu audio opremu tijekom prijevoza i skladištenja. Sa svojim izdržljivim materijalima i sigurnosnim bravama, Mix Case CD/Mixer je praktičan izbor za profesionalce i DJ-e.', 'Dimenzija', '405 x 475 x 175 mm', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'accessories', 'MDR-MV1', 'Sony', 411, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/563964/18139583_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'headphones', 'Sony MDR-MV1 su visokokvalitetne slušalice koje pružaju izvanredan zvuk i udobnost. Ove slušalice dolaze s zatvorenim dizajnom koji smanjuje buku iz okoline i pruža jasan zvuk. MDR-MV1 su idealne za ljubitelje glazbe i profesionalce koji traže visoku kvalitetu zvuka.', 'Frekvencijski raspon', '5 - 80,000 Hz', 'Težina', '223 g', 'Impedancija', '24 Ohm', NULL, NULL, NULL),
(66, 'controllers', 'Traktor S2 MK3', 'Native Instruments', 298, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '486 x 265 x 59', 2.3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/447929/13624516_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Native Instruments Traktor S2 MK3 je kompaktni DJ kontroler dizajniran za upotrebu s Traktor Pro softverom. Ovaj kontroler nudi dvokanalno miksiranje s visokokvalitetnim jog kotačima, RGB osvjetljenim drumpads-ima i ugrađenim zvučnim karticama. Traktor S2 MK3 je idealan za DJ-e koji žele precizno kontrolirati svoje setove.', NULL, NULL, NULL, NULL, NULL, NULL, 'TRAKTOR PRO 3', 2, 'Da'),
(67, 'controllers', 'Mixtrack Platinum FX', 'Numark', 279, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '536 x 246 x 51', 2.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_49/493262/15131288_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Numark Mixtrack Platinum FX je DJ kontroler sa 4 kanala koji nudi izvanredne mogućnosti za kreativno miksiranje. Ovaj kontroler dolazi s ugrađenim efektima, visokokvalitetnim jog kotačima i integracijom za Serato DJ Lite. Mixtrack Platinum FX je savršen za DJ-e koji žele kontrolirati glazbu s preciznošću i kreativnošću.', NULL, NULL, NULL, NULL, NULL, NULL, 'Serato DJ Lite', 4, 'Ne');
INSERT INTO `products` (`id`, `category`, `name`, `manufacturer`, `price`, `quantity`, `speakerType`, `drivers`, `RMS`, `maxPower`, `soundPressure`, `maxFrequency`, `minFrequency`, `dimensions`, `weight`, `imageURL1`, `imageURL2`, `imageURL3`, `salesCount`, `faders`, `inputs`, `outputs`, `cableType`, `length`, `leftJack`, `leftJackType`, `rightJack`, `rightJackType`, `color`, `limiter`, `channels`, `power`, `lightSource`, `powerConsumption`, `lightType`, `beamAngle`, `discount`, `caseFor`, `caseType`, `accessoryType`, `description`, `additionalLine1`, `additionalLineValue1`, `additionalLine2`, `additionalLineValue2`, `additionalLine3`, `additionalLineValue3`, `softwareSupport`, `deckNumber`, `externalPowerSource`) VALUES
(68, 'controllers', 'DJ Control Inpulse T7', 'Hercules', 725, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '652 x 350 x 90', 5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/566514/18451927_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Hercules DJ Control Inpulse T7 je kompaktni DJ kontroler dizajniran za početnike i hobiste. Ovaj kontroler dolazi s intuitivnim funkcijama za miksiranje, uključujući vodiče za tempo i harmonijski miks. Sa ugrađenim svjetlosnim vodičem, Inpulse T7 omogućuje korisnicima da brzo nauče miksiranje i stvaraju dinamične setove.', NULL, NULL, NULL, NULL, NULL, NULL, 'Serato DJ lite', 2, 'Ne'),
(69, 'controllers', 'Prime 4+', 'Denon DJ', 2699, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '728 x 497 x 104', 9.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/568912/18459202_800.jpg', 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/568912/18459292_800.jpg', 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/568912/18459270_800.jpg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Denon DJ Prime 4+ je sve-u-jednom DJ sistem koji nudi nevjerojatnu izvedbu i fleksibilnost za DJ-e. Ovaj sistem dolazi s 4 kanala, ugrađenim zaslonom osjetljivim na dodir, i mogućnošću bežičnog streaminga glazbe. Prime 4+ je idealan za DJ-e koji žele sve-u-jednom rješenje za svoje nastupe.', NULL, NULL, NULL, NULL, NULL, NULL, 'Serato DJ Pro', 4, 'Da'),
(70, 'controllers', 'Four', 'Rane', 1599, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '784 x 405 x 107', 8.3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/560326/18016726_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Rane Four je svestrani digitalni DJ mikser s četiri kanala i brojnim naprednim značajkama. Ovaj mikser nudi integraciju sa softverom Serato DJ, visokokvalitetne efekte i dodatnu fleksibilnost za kreativno miksanje. Rane Four je idealan za profesionalne DJ-e koji traže visoku izvedbu i kontrolu.', NULL, NULL, NULL, NULL, NULL, NULL, 'Serato', 4, 'Ne'),
(71, 'controllers', 'DJ Control Inpulse 500', 'Hercules', 289, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '542 x 296 x 70', 3.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_49/491090/15196993_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Hercules DJ Control Inpulse 500 je DJ kontroler koji nudi jednostavnost upotrebe i visoku funkcionalnost. S visokokvalitetnim jog kotačima, drumpads-ima i ugrađenim svjetlosnim vodičem za miksiranje, ovaj kontroler je savršen za početnike i iskusne DJ-e koji žele kreirati uzbudljive setove.', NULL, NULL, NULL, NULL, NULL, NULL, 'Serato DJ Pro', 4, 'Ne'),
(72, 'controllers', 'Traktor S3', 'Native Instruments', 477, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '540 x 66 x 360', 3.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_47/475701/14700871_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Native Instruments Traktor S3 je kompaktan DJ kontroler koji pruža sve što vam je potrebno za miksanje glazbe uživo. S integracijom za Traktor Pro 3 softver, ovaj kontroler ima visokokvalitetne jog kotače, mikrofon ulaze, i XY efektsekciju za kreativno miksanje. Traktor S3 je savršen za DJ-e i producente koji žele dinamično kontrolirati glazbu na nastupima.', NULL, NULL, NULL, NULL, NULL, NULL, 'Traktor 3', 4, 'Ne'),
(73, 'mixers', 'MG16XU', 'Yamaha', 577, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '444 x 130 x 500', 6.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_33/333837/8414219_800.jpg', NULL, NULL, 0, 16, 14, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Yamaha MG16XU je kompaktni mikser s 16 kanala koji nudi visoku kvalitetu zvuka i mnoge profesionalne značajke. Ovaj mikser dolazi s ugrađenim efektima, D-PRE pretpojačalima, i USB audio sučeljem. Yamaha MG16XU je idealan za glazbenike i producente koji traže pouzdan i kvalitetan mikser za svoje projekte.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'mixers', 'Onyx8', 'Mackie', 349, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '279 x 280 x 53', 3.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_50/500237/16907840_800.jpg', NULL, NULL, 0, 14, 6, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Mackie Onyx8 je kompaktni mikser s 8 kanala koji kombinira kvalitetu i jednostavnost upotrebe. Ovaj mikser dolazi s Mackie\'s Onyx pretpojačalima za izvanredan zvuk i mnogim korisnim značajkama, uključujući ugrađene efekte. Onyx8 je idealan za male nastupe, kućne snimke i producente koji traže kompaktan i visokokvalitetan mikser.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'mixers', 'ProFX12v3', 'Mackie', 345, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102 × 330 × 376', 3.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_47/473569/14655931_800.jpg', NULL, NULL, 0, 16, 8, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Mackie ProFX12v3 je višenamjenski mikser s 12 kanala koji pruža izvanredan zvuk i fleksibilnost. Ovaj mikser dolazi s ugrađenim efektima, 7-band EQ-om i USB audio sučeljem za snimanje. S robustnom konstrukcijom i Mackie\'s Vita pretpojačalima, ProFX12v3 je idealan za glazbenike i inženjere zvuka.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'mixers', 'Xenyx 802S', 'Behringer', 95, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '189 x 220 x 47', 1.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_56/560494/18009678_800.jpg', NULL, NULL, 0, 18, 12, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Behringer Xenyx 802S je kompaktni mikser sa 8 kanala, savršen za male nastupe i studijske sesije. Ovaj mikser nudi Xenyx pretpojačala za kvalitetan zvuk i ima sve osnovne funkcije koje su vam potrebne za miksanje i snimanje. Xenyx 802S je praktičan i pouzdan izbor za glazbenike i producente.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'mixers', 'Xenyx X1204 USB', 'Behringer', 216, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '97 x 270 x 328', 2.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_24/243148/6890140_800.jpg', NULL, NULL, 0, 14, 6, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Behringer Xenyx X1204 USB je kompaktni mikser s brojnim profesionalnim značajkama. Ovaj mikser nudi 12 kanala za miksanje, ugrađeni USB audio interfejs, i kvalitetne Xenyx pretpojačala za čist i precizan zvuk. S mnogim efektima i mogućnostima snimanja, Xenyx X1204 USB je idealan za glazbenike, producente i miksanje uživo.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'mixers', 'Model 24', 'Tascam', 1190, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '577 x 529 x 106', 10.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/448627/14926720_800.jpg', NULL, NULL, 0, 26, 12, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Tascam Model 24 je sve-u-jednom digitalni multitrack mikser i audio sučelje. Ovaj uređaj nudi 24 kanala za miksanje, ugrađene efekte, USB audio povezivanje i mnoge druge profesionalne značajke. Model 24 je savršen za glazbenike, producente i snimanje uživo, pružajući visokokvalitetnu zvučnu izvedbu i fleksibilnost u jednom uređaju.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'mixers', 'xmix 1202 FXMP USB', 'the t.mix', 199, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '345 x 100 x 340', 4.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_42/422795/14854230_800.jpg', NULL, NULL, 0, 16, 6, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the t.mix xmix 1202 FXMP USB je kompaktni mikser s ugrađenim efektima i USB sučeljem. Ovaj mikser je idealan za glazbenike i producente koji traže profesionalnu kvalitetu zvuka i fleksibilnost u upravljanju audio signalima. Sa 12 kanala, ugrađenim efektima i USB povezivanjem, the t.mix xmix 1202 FXMP USB nudi sve što vam je potrebno za snimanje i miksanje glazbe.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'adapters', '1672 Adapter', 'the sssnake', 6.7, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_12/128498/7669028_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, 'XLR', 'male', '6,3 mm', 'male', 'Siva', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the sssnake 1672 Adapter je praktičan audio adapter kabel s muškim 6,3 mm jack priključkom na jednom kraju i ženskim 6,3 mm jack priključkom na drugom kraju. Ovaj adapter omogućuje vam da produžite postojeće 6,3 mm audio kablove i povežete različite audio uređaje. Izrađen je od kvalitetnih materijala za čistu i pouzdanu audio reprodukciju.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'adapters', '1843 Adapter', 'the sssnake', 0.77, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_10/106472/11082451_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, '6,3 mm', 'male', '3,5', 'female', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the sssnake 1843 Adapter je praktičan audio adapter kabel koji vam omogućuje da povežete različite audio uređaje. Ovaj adapter dolazi s muškim XLR priključkom na jednom kraju i ženskim XLR priključkom na drugom kraju, čineći ga idealnim za produživanje i povezivanje XLR kabela. Izrađen je od kvalitetnih materijala za pouzdanu i čistu audio reprodukciju.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'adapters', 'TPA 1003 MB', 'pro snake', 4.99, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_25/259699/9280890_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, 30, 'XLR', 'male', '3,5 mm', 'female', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'pro snake TPA 1003 MB je visokokvalitetni audio adapter kabel s muškim 3,5 mm stereo priključkom na jednom kraju i muškim 3,5 mm stereo priključkom na drugom kraju. Ovaj kabel je savršen za povezivanje uređaja s 3,5 mm priključkom i pruža čistu i pouzdanu audio reprodukciju. Izrađen je od kvalitetnih materijala za trajnost i pouzdanost.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'adapters', 'Lightning to 3,5 mm Adapter', 'Apple', 10.3, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_46/466501/14184637_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, 5, 'Lighting', 'male', '3,5 mm', 'female', 'Bijela', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Apple Lightning to 3,5 mm Adapter je praktičan uređaj koji omogućuje korisnicima Apple uređaja da povežu svoje uređaje s Lightning priključkom s klasičnim 3,5 mm audio priključkom. Ovaj adapter omogućuje vam da nastavite koristiti svoje omiljene slušalice ili zvučnike s uređajem bez 3,5 mm priključka. Ovo je savršeno rješenje za korisnike Apple uređaja koji žele produžiti svoje audio iskustvo.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'adapters', 'TPA 1003 FB', 'pro snake', 4.99, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_25/259700/9280915_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, 30, '3,5 mm', 'female', 'XLR', 'female', 'Crni', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'pro snake TPA 1003 FB je visokokvalitetni audio adapter kabel s ženskim 3-pinskim XLR priključkom na jednom kraju i muškim 3,5 mm stereo priključkom na drugom kraju. Ovaj kabel omogućuje povezivanje profesionalnih audio uređaja s uređajima koji koriste 3,5 mm priključke. Izrađen je od visokokvalitetnih materijala za čistu i pouzdanu audio reprodukciju, čineći ga idealnim za profesionalce i audio entuzijaste.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'adapters', 'TPA 1003 FJ', 'pro snake', 4.99, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_25/259701/9280950_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, 0.3, 'XLR', 'female', '6,3 mm', 'male', 'Crna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'pro snake TPA 1003 FJ je kvalitetni audio adapter kabel s ženskim 3-pinskim XLR priključkom na jednom kraju i ženskim 3,5 mm stereo priključkom na drugom kraju. Ovaj kabel omogućuje povezivanje profesionalnih audio uređaja s uređajima koji koriste 3,5 mm priključke. Izrađen je od visokokvalitetnih materijala za čistu i pouzdanu audio reprodukciju.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'light', 'TMH-13 Moving-Head Spot', 'Eurolite', 185, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160 x 158 x 280', 2.7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_37/372122/10823596_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10W Led', 30, 'movingHeadSpot', '13', 0, NULL, NULL, NULL, 'Eurolite TMH-13 Moving-Head Spot je moćan i kompaktan svjetlosni uređaj koji omogućuje dinamičnu i preciznu rasvjetu. Ovaj uređaj nudi visoku svjetlosnu izlaznu snagu i mogućnost pomicanja glave za precizno usmjeravanje svjetlosnog snopa. Idealno za pozornice, evente i klubove, Eurolite TMH-13 Moving-Head Spot pruža visokokvalitetne svjetlosne efekte i izvedbu.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'light', 'LED TMH-X4 Zoom Wash', 'Eurolite', 579, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '305 x 400 x 200', 8.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_49/490444/14988210_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19 x 15W RGBW LED', 225, 'movingHeadWash', '70', 0, NULL, NULL, NULL, 'Eurolite LED TMH-X4 Zoom Wash je svestran i moćan LED svjetlosni uređaj koji će obogatiti vaše svjetlosne performanse. Ovaj uređaj nudi visoku svjetlosnu izlaznu snagu i funkciju zumiranja za prilagodbu rasvjete. S mnogo efekata i boja na raspolaganju, Eurolite LED TMH-X4 Zoom Wash je savršen za scenske nastupe, klubove i događaje gdje želite dodati dinamičnu rasvjetu.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'light', 'Hero Wash 712 Z RGBW Zoom', 'Varytec', 299, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '215 x 300 x 145', 4.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/449222/13981926_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7x12 W RGBW 4in1 LED', 80, 'movingHeadWash', '70', 0, NULL, NULL, NULL, 'Varytec Hero Wash 712 Z RGBW Zoom je snažan i fleksibilan LED svjetlosni uređaj koji će obogatiti vaše svjetlosne performanse. Ovaj uređaj nudi bogatu paletu boja i impresivnu svjetlosnu izlaznu snagu. S funkcijom zumiranja, možete prilagoditi kut rasvjete prema svojim potrebama. Hero Wash 712 Z je idealan za pozornice, klubove i evente gdje je potrebna profesionalna rasvjeta visokih performansi.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'light', 'Hero Wash 340FX RGBW Zoom', 'Varytec', 411, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '255 x 368 x 187', 4.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/449223/13983416_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3x40W RGBW 4in1 LED', 134, 'movingHeadWash', '70', 0, NULL, NULL, NULL, 'Varytec Hero Wash 340FX RGBW Zoom je svestrani i moćan LED svjetlosni uređaj koji će transformirati vaše događaje s bogatim i širokim svjetlosnim efektima. Ovaj uređaj nudi impresivan raspon boja i dinamičnih efekata, te ima mogućnost zumiranja za prilagodbu rasvjete. Sa svojim visokim svjetlosnim izlazom i profesionalnim značajkama, Varytec Hero Wash 340FX RGBW Zoom je idealan za scenske nastupe, evente i instalacije gdje je potrebna spektakularna rasvjeta.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'light', 'NanoBeam 600', 'Cameo', 255, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '145 x 240 x 155', 3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_47/473960/14494824_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '60W RGBW LED', 65, 'movingHeadBeam', '5', 0, NULL, NULL, NULL, 'Cameo NanoBeam 600 je kompaktni i snažan LED svjetlosni efekt koji će dodati dinamičnu svjetlosnu atmosferu vašim događanjima. Ovaj svjetlosni efekt nudi visoku svjetlosnu izlaznu snagu i različite uzbudljive efekte, što ga čini savršenim za pozornice, klubove i mobilne zabave. Sa svojim kompaktnim i lakim dizajnom, Cameo NanoBeam 600 je praktičan i impresivan dodatak vašem svjetlosnom setupu.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'light', 'ROOT Par 6', 'Cameo', 129, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '195 x 133 x 195', 1.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_49/490744/15191243_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6x12W Hexa-Colour', 58, 'LEDPar', '36', 0, NULL, NULL, NULL, 'Cameo ROOT Par 6 je snažan i fleksibilan LED par zvučnik koji će osvijetliti vaše događaje i dodati poseban vizualni element vašim nastupima. Ovaj par zvučnika pruža bogatu paletu boja i efekata, čineći ga idealnim za pozornice, klubove i evente. Sa svojim kompaktnim dizajnom i jednostavnim upravljanjem, Cameo ROOT Par 6 omogućuje vam stvaranje spektakularnih svjetlosnih efekata.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'light', 'Compact Par 18 MKII Black', 'Showtec', 205, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '256 x 285 x 96', 3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_29/299987/6253952_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18x3W RGB-in-1 LED', 60, 'LEDPar', '28', 0, NULL, NULL, NULL, 'Compact Par 18 MKII Black je kompaktan, ali snažan reflektor. Opremljen je s osamnaest 3-u-1 RGB LED dioda koje u kombinaciji sa snažnom optikom jamče savršenu izvedbu u svim situacijama. Compact Par 18 MKII ima IEC ulaz i izlaz za jednostavno povezivanje raznih uređaja. Zbog kompaktne aluminijske konstrukcije, ovaj uređaj je posebno prikladan za korištenje u malim prostorijama ili kao rešetkasta unutarnja rasvjeta.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'amplifiers', 'E4-250', 'the t.amp', 329, 10, NULL, NULL, NULL, NULL, NULL, 20000, 30, '482 x 408 x 88', 15, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_34/348233/9384199_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 4, 1000, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the t.amp E4-250 je kompaktno i snažno pojačalo koje pruža visoku kvalitetu zvuka u malom paketu. Ovo pojačalo je savršeno za manje koncerte, klupske nastupe i audio instalacije gdje je potreban snažan i čist zvuk. Sa svojim kompaktnim dizajnom i energetski učinkovitom tehnologijom, the t.amp E4-250 nudi impresivnu izvedbu i trajnost.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'amplifiers', 'I-Amp 4.500', 'Sirus', 515, 10, NULL, NULL, NULL, NULL, NULL, 2000, 20, '483 x 360 x 44', 6.3, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_55/551990/18407372_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 4, 1800, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Sirus I-Amp 4.500 je snažno i izdržljivo pojačalo koje će ispuniti sve vaše audio potrebe. Ovo pojačalo donosi visoku izlaznu snagu i preciznost, čineći ga idealnim za koncerte, velike evente i profesionalne audio instalacije. S naprednim tehničkim karakteristikama i zaštitama, Sirus I-Amp 4.500 osigurava kvalitetu zvuka i pouzdanost u zahtjevnim okruženjima.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'amplifiers', 'Proline 3000', 'the t.amp', 699, 12, NULL, NULL, NULL, NULL, NULL, 2000, 30, '482 x 480 x 132', 37, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_16/168990/7943265_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 4, 1200, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the t.amp Proline 3000 je snažno i pouzdano pojačalo koje će poboljšati vaš audio sustav. Ovo pojačalo nudi visoku snagu i kvalitetu zvuka, čineći ga savršenim izborom za profesionalce i audio entuzijaste. Sa svojim kompaktnim dizajnom i naprednim značajkama, uključujući mogućnost mostiranja i zaštite od pregrijavanja, the t.amp Proline 3000 pruža izvanrednu izvedbu i kontrolu nad zvukom u raznim postavkama i aplikacijama.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'amplifiers', 'A800', 'Behringer', 329, 8, NULL, NULL, NULL, NULL, NULL, 20000, 20, '483 x 220 x 94', 3.2, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/448701/13745556_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 4, 900, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Behringer A800 je snažno i kompaktno pojačalo koje nudi visokokvalitetnu zvučnu izvedbu. Ovo pojačalo je idealno za audio entuzijaste i profesionalce koji traže pouzdanost i preciznost. S impresivnom snagom i profesionalnim značajkama, uključujući zaštitu od preopterećenja i kratkog spoja, Behringer A800 omogućuje vam postizanje visokih standarda zvuka u raznim aplikacijama.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'amplifiers', 'IPX 2400', 'LAB Gruppen', 1555, 4, NULL, NULL, NULL, NULL, NULL, 22000, 20, '450 x 400 x 120', 7, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_53/533202/18254036_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 6, 2400, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'LAB Gruppen IPX 2400 je visokokvalitetno i iznimno pouzdano pojačalo koje će vas impresionirati svojom izvedbom. Ovo pojačalo donosi visoku snagu i preciznost u reprodukciji zvuka, čineći ga idealnim za profesionalne audio postavke, koncerte i evente. S naprednim tehničkim karakteristikama, uključujući visoku učinkovitost i napredne zaštite, LAB Gruppen IPX 2400 nudi profesionalnu kvalitetu zvuka i izdržljivost.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'amplifiers', 'DSP 4x4 Mini Amp', 'the t.racks', 199, 6, NULL, NULL, NULL, NULL, NULL, 18000, 30, '240 x 160 x 43', 1.6, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_49/495806/15874608_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 4, 1200, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the t.racks DSP 4x4 Mini Amp je kompaktno i moćno pojačalo s ugrađenim DSP (Digital Signal Processor) funkcijama. Ovo pojačalo omogućuje precizno podešavanje zvuka i upravljanje signalima, pružajući visoku fleksibilnost i kontrolu. S četiri kanala visoke izlazne snage, DSP 4x4 Mini Amp je idealan izbor za ozvučavanje prostora, live nastupe i instalacije gdje je potrebna visoka kvaliteta zvuka.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'amplifiers', 'Xti 4002', 'Crown', 1245, 9, NULL, NULL, NULL, NULL, NULL, 20000, 35, '485 x 89 x 311', 8.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_26/268582/7312675_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Da', 2, 1200, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Crown Xti 4002 je visokokvalitetno pojačalo koje će poboljšati vaš audio sustav. Ovo pojačalo nudi izvanrednu snagu i preciznost u reprodukciji zvuka, čineći ga idealnim za profesionalne audio postavke i ozvučavanje. Sa brojnim naprednim značajkama, uključujući DSP za kontrolu i podešavanje zvuka, Crown Xti 4002 omogućuje precizno prilagođavanje zvuka prema vašim potrebama. Ovo pojačalo je pouzdan i izdržljiv izbor za ozbiljne audio entuzijaste i profesionalce.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'speakers', 'Elements E835 Top', 'HK Audio', 555, 18, 'passiveSpeaker', '8x 3,5\" full-range', 300, 600, 100, 20000, 140, '110 x 720 x 120', 4.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_28/287207/7284318_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'HK Audio Elements E835 Top je izvanredan pasivni zvučnik koji će vas oduševiti svojom jasnom i preciznom reprodukcijom zvuka. Ovaj zvučnik donosi visoku razlučivost i iznimnu dosljednost zvuka, što ga čini savršenim za profesionalne audio instalacije i live nastupe. Sa svojim elegantnim dizajnom i kvalitetnom konstrukcijom, HK Audio Elements E835 Top je pouzdan izbor za zahtjevne korisnike.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'speakers', 'TA Power Bundle', 'the box', 1959, 4, 'speakerBundle', '2x18\" + 12x12\"', 900, 1800, 134, 22000, 35, 'Više dimenzija', 150, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_19/195038/15392807_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'the box TA Power Bundle je impresivan audio paket koji će oživjeti vašu glazbu i događanja s izvanrednim zvukom. Ovaj bundle sadrži the box TA18 subwoofer i dva the box TA12 zvučnika, stvarajući moćnu kombinaciju za bogat i snažan zvuk. Sa visokokvalitetnim komponentama i snažnim pojačalom, the box TA Power Bundle pruža profesionalnu zvučnu izvedbu za koncerte, događanja i druge glazbene prilike.', 'Subwooferi', '2x the box TA18', 'Sateliti', '2x the box TA12', 'Stalci', '2x Roadworx Multi Pole', NULL, NULL, NULL),
(102, 'speakers', 'Satmix 2.1 Bundle', 'Fun Generation', 450, 2, 'speakerBundle', '2x10 + 1x15', 500, 100, 128, 20000, 30, 'Više dimenzija', 45, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_44/446439/14037182_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Fun Generation Satmix 2.1 Bundle je sve što trebate za svoj zabavni audio sustav. Ovaj bundle sadrži dva satelitska zvučnika i snažan subwoofer, pružajući vam uravnotežen i impresivan zvuk za kućne zabave i manje događaje. Lako se postavlja i upravlja, a njegova praktičnost čini ga idealnim izborom za korisnike koji žele kvalitetan zvuk bez kompliciranih postavki.', 'Stalci', 'Millenium BS-2010', 'Kablovi', 'Fun Generation SPK 10', NULL, NULL, NULL, NULL, NULL),
(103, 'speakers', 'D115SP/D18 Power Bundle', 'Syrincs', 1666, 2, 'speakerBundle', '2x18 + 2x15', 900, 1800, 132, 22000, 30, 'Više dimenzija', 90, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_55/555460/17757143_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Syrincs D115SP/D18 Power Bundle je moćan zvučnički paket koji će vas impresionirati svojom izvedbom. Ovaj bundle kombinira Syrincs D115SP aktivni zvučnik s D18 subwooferom, stvarajući savršenu kombinaciju za bogat i dubok zvuk. Sa visokokvalitetnim komponentama i snažnim pojačalom, ovaj bundle pruža profesionalnu zvučnu izvedbu za koncerte, događanja i druge glazbene prilike.', 'Subwooferi', 'Syrincs D18 Sub', 'Sateliti', 'Syrincs D115SP', 'Stalci', 'Roadworx Multi Pole', NULL, NULL, NULL),
(104, 'speakers', 'Stinger 8 G3', 'LD Systems', 299, 8, 'monitorSpeaker', 'Pasivni 8\" + 1\" monitor/full range', 300, 600, 118, 20000, 70, '270 x 457 x 290', 9.5, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_40/409111/12300197_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'LD Systems Stinger 8 G3 je snažan aktivni zvučnik koji će oživjeti vašu glazbu i događanja s izvanrednim zvukom. Ovaj zvučnik dolazi s naprednim zvučničkim komponentama i ugrađenim pojačalom, pružajući visoku izvedbu i praktičnost. Stinger 8 G3 je idealan izbor za profesionalne glazbenike, DJ-e i sve koji traže vrhunski zvučni sustav koji se lako postavlja i upravlja.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'speakers', 'ELX 112', 'EV', 345, 16, 'monitorSpeaker', '12\" woofer + 1.5\" visokotonac', 300, 600, 122, 18000, 60, '607 x 362 x 340', 15.8, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_26/264580/12872732_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Electro-Voice (EV) ELX 112 je snažan pasivni zvučnik s visokom izvedbom i širokim frekvencijskim rasponom. Ovaj zvučnik je savršen za glazbenike, DJ-e i ozvučavanje prostora gdje je potreban snažan i jasan zvuk. Sa svojim 12-inčnim wooferom za dubok bas i visokotoncem s visokom frekvencijskom reprodukcijom, ELX 112 isporučuje impresivan zvuk za profesionalne glazbene i zabavne situacije. Izdržljiva konstrukcija od 15-milimetarske iverice i ergonomske ručke olakšavaju transport, dok se mogućnost montaže na stalak pruža fleksibilnost pri postavljanju. EV ELX 112 nudi visokokvalitetan zvuk i izdržljivost, što ga čini idealnim za profesionalnu upotrebu.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'speakers', 'Zx1-90', 'EV', 399, 9, 'monitorSpeaker', '8\"/ 1\" drivers', 200, 800, 118, 18000, 70, '451 x 282 x 263', 8.4, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_18/186655/9006224_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Electro-Voice (EV) Zx1-90 je kompaktan pasivni zvučnik koji pruža izvanredan zvuk i prenosivost. Ovaj zvučnik kombinira visoku izvedbu s kompaktnim dizajnom, čineći ga savršenim izborom za male događaje, konferencije ili mobilne zabave. Zahvaljujući svojoj laganoj konstrukciji i mogućnosti montaže na stalak ili vješanje, EV Zx1-90 nudi visoku izvedbu u kompaktnom paketu, čineći ga izvrsnim izborom za one koji traže prijenosni zvučni sustav bez kompromisa.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'speakers', 'Line A6', 'Seeburg Acoustic', 1222, 17, 'monitorSpeaker', '12\" neoademijski woofer + 1\" visokotonac', 500, 1500, 132, 20000, 35, '360 x 340 x 606', 17, 'https://thumbs.static-thomann.de/thumb/padthumb600x600/pics/bdb/_16/161502/12113632_800.jpg', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 'Seeburg Acoustic Line A6 je vrhunski pasivni zvučnik koji će podići kvalitetu zvuka na vašim događanjima i uživo nastupima. Sa svojim elegantnim dizajnom i visokokvalitetnim materijalima, ovaj zvučnik osigurava izvanrednu izvedbu i impresivan zvuk. Njegova MDF konstrukcija smanjuje rezonanciju i pruža trajnost, dok se njegov elegantan dizajn lako uklapa u različite prostorne postavke. Seeburg Acoustic Line A6 nudi izvanredan zvuk i pouzdanost, čineći ga idealnim izborom za profesionalne glazbenike, DJ-e i sve koji traže vrhunsku audio opremu.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `product` int(6) NOT NULL,
  `user` varchar(60) NOT NULL,
  `message` varchar(500) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product`, `user`, `message`, `rating`) VALUES
(1, 103, 'Ana Anić', 'Savršeno! Ovaj Syrincs D115SP/D18 Power Bundle je moj novi najbolji prijatelj na svakom partyju. Snaga zvuka je nevjerojatna, a basovi su duboki i snažni. Jednostavno obožavam kako podiže atmosferu. 4/5 jer uvijek ima mjesta za poboljšanja, ali inače fantastičan.', 4),
(2, 103, 'Marko Marinković', 'Ovo je zvuk iz snova! D115SP/D18 Bundle je apsolutni pobjednik. Jasan zvuk, snažan bas, i vrhunska izvedba. Nećete vjerovati koliko je moćan ovaj sustav. 5/5 bez imalo oklijevanja.', 5),
(3, 103, 'Jana Jurić', 'Solidan zvuk, ali malo kompliciran za podešavanje. Dugo sam se mučio s postavljanjem, ali nakon što sam sve prilagodio, zvuk je bio pristojan. 3/5 zbog komplikacija.', 3),
(4, 103, 'Nikola Nikić', 'Ovo je ono što trebate za ozbiljan audio doživljaj. Beats su kristalno jasni, a setup je jednostavan. Ne bih mijenjao ništa!', 5),
(5, 103, 'Ivana Ivić', 'Dobro, ali ne savršeno. D115SP/D18 Bundle pruža pristojan zvuk, ali nije impresivan kao što sam očekivao. Ipak, za cijenu je dobar izbor.', 4),
(6, 103, 'Luka Lukić', 'Najbolji audio doživljaj ikada! Syrincs D115SP/D18 Power Bundle premašuje sva očekivanja. Jasnoća zvuka je nevjerojatna, a basovi su duboki.', 5),
(7, 103, 'Marta Martinović', 'Super za zabave! Ovaj bundle stvarno stvara pravu atmosferu, ali nešto više moći u zvuku bi bilo sjajno. 4/5 zbog malo nedostatka snage.', 4),
(8, 103, 'Petar Petrović', 'Oduševljen sam performansama! D115SP/D18 Power Bundle je ultimativno audio rješenje za prave audiofile. 5/5 bez premišljanja.', 5),
(9, 103, 'Ana Anić', 'Bas je solidan, ali zvučnici imaju problema s visokim tonovima. Za ljubitelje basa je dobar, ali očekivao sam bolje.', 3),
(10, 103, 'Ivan Ivić', 'Profesionalna kvaliteta zvuka! Syrincs D115SP/D18 Power Bundle je moj go-to izbor u studiju. Sve frekvencije su savršeno balansirane.', 5),
(11, 1, 'Mia Mikić', 'Zvuk je fenomenalan! Eurolive B212D je prava poslastica za audiofile. Jako sam zadovoljna performansama ovog zvučnika.', 5),
(12, 1, 'Igor Ivić', 'Jednostavno fantastično! B212D pruža kristalno čist zvuk, a basovi su impresivni. Bez sumnje preporučujem.', 5),
(13, 1, 'Ema Erceg', 'Ovaj zvučnik mi je promijenio život! Eurolive B212D je savršen za kućne zabave. Zvuk je snažan, a jednostavan za korištenje.', 4),
(14, 1, 'Nikola Novak', 'Za tu cijenu ne možete bolje! B212D pruža izuzetan zvuk po pristupačnoj cijeni.', 4),
(15, 1, 'Lana Lukić', 'Savršeno za live nastupe! Eurolive B212D je moj izbor za koncerte. Snaga i jasnoća zvuka su nevjerojatni.', 5),
(16, 1, 'Filip Filipović', 'Dobar, ali mogao bi biti bolji. B212D je solidan zvučnik, ali mislim da ima mjesta za poboljšanja.', 3),
(17, 1, 'Katarina Kovač', 'Oduševljena sam! Eurolive B212D je premašio moja očekivanja. Vrhunski zvuk i lakoća korištenja.', 5),
(18, 1, 'Ante Antić', 'Zvuk na nivou! B212D je pravi majstor u reprodukciji zvuka. Koristim ga svaki dan i oduševljen sam.', 5),
(19, 1, 'Lea Letić', 'Solidan izbor za početnike. Eurolive B212D pruža dobar zvuk, posebno za one koji tek ulaze u svijet audio opreme.', 4),
(20, 1, 'Ivan Ivanković', 'Fantastičan zvučnik za cijenu! Eurolive B212D je pravi pogodak ako tražite visokokvalitetan zvuk bez praznjenja novčanika.', 5),
(21, 1, 'Lucija Lučić', 'Ne možete pogriješiti s B212D! Ovaj zvučnik je jednostavno impresivan. Jasan zvuk i snažni basovi.', 5),
(22, 1, 'Davor Dabčević', 'Dobar, ali očekivao sam više. Eurolive B212D je dobar zvučnik, ali mislim da je mogao imati jači bas.', 3),
(23, 3, 'Ana Anić', 'Odličan Midi kontroler! SK366-2-RED Midi je savršen za produkciju glazbe. Kontrole su intuitivne, a kvaliteta izrade je izvrsna.', 5),
(24, 3, 'Marko Marinković', 'Savršen za live nastupe! SK366-2-RED Midi ima sve što mi je potrebno za kontrolu glazbe uživo. Lakoća korištenja je fantastična.', 5),
(25, 3, 'Jana Jurić', 'Dobar, ali ima mjesta za poboljšanja. SK366-2-RED Midi pruža solidne performanse, ali neke funkcije bi mogle biti bolje.', 3),
(26, 3, 'Nikola Nikolić', 'Fantastičan Midi kontroler! SK366-2-RED Midi je briljantan. Kontrole su precizne, a kompatibilnost s raznim DAW-ovima je odlična.', 5),
(27, 3, 'Ivana Ivić', 'Solidan izbor za početnike. SK366-2-RED Midi je pristupačan i jednostavan za korištenje, što ga čini idealnim za početnike.', 4),
(28, 3, 'Luka Lukić', 'Jednostavno fantastično! SK366-2-RED Midi ima sve što mi treba za glazbenu produkciju. Lakoća korištenja je vrhunska.', 5),
(29, 3, 'Marta Martinović', 'Kvaliteta na visokom nivou! SK366-2-RED Midi je vrhunski Midi kontroler. Kontrole su osjetljive, a izdržljivost je impresivna.', 5),
(30, 3, 'Petar Petrović', 'Odličan omjer cijene i kvalitete! SK366-2-RED Midi pruža izuzetne performanse po pristupačnoj cijeni.', 5),
(31, 3, 'Ana Anić', 'Dobar Midi kontroler za produkciju! SK366-2-RED Midi je dobar izbor za one koji se bave glazbenom produkcijom.', 4),
(32, 3, 'Ivan Ivić', 'Fantastičan Midi kontroler! SK366-2-RED Midi ima sve što mi treba i više. Kontrole su vrhunske, a lakoća korištenja je nevjerojatna.', 5),
(33, 3, 'Lana Lukić', 'Solidan izbor za glazbenike! SK366-2-RED Midi pruža dobar balans između performansi i cijene. Preporučujem ga.', 4),
(34, 3, 'Igor Ivić', 'Dobar Midi kontroler, ali treba malo prilagodbe. SK366-2-RED Midi je solidan, ali morao sam malo prilagoditi postavke.', 3),
(43, 5, 'Iva Ivić', 'Fantastičan zvučnik! the box Pyrit 15 pruža snažan bas i kristalno jasan zvuk. Savršen za ozbiljne audiofile.', 5),
(44, 5, 'Marko Marinković', 'Ovaj zvučnik je prava bomba! the box Pyrit 15 je premašio moja očekivanja. Snaga i kvaliteta zvuka su izvanredni.', 5),
(45, 5, 'Ana Anić', 'Solidan zvučnik za cijenu. the box Pyrit 15 pruža pristojan zvuk po povoljnoj cijeni.', 4),
(46, 5, 'Nina Novak', 'Impresivan zvuk u kompaktnom paketu! the box Pyrit 15 je odličan za manje prostore, ali pritom ne žrtvuje kvalitetu zvuka.', 5),
(47, 5, 'Luka Lukić', 'Ovaj zvučnik je pravo malo čudo! the box Pyrit 15 je kompaktan, ali zvuči kao veliki. Jasan zvuk i snažan bas.', 5),
(48, 5, 'Petra Petrović', 'Dobar omjer cijene i kvalitete. the box Pyrit 15 nudi solidne performanse po pristupačnoj cijeni.', 4),
(49, 5, 'Ivan Ivić', 'Savršen za kućne zabave! the box Pyrit 15 podiže atmosferu na svakom partyju. Snaga zvuka je impresivna.', 5),
(50, 4, 'Martina Marić', 'Impresivan zvučnik! the box pro Achat 115 M pruža izniman zvuk i moćan bas. Oduševljena sam performansama.', 5),
(51, 4, 'Ante Antić', 'Odličan zvučnik za live nastupe! the box pro Achat 115 M ima snažan zvuk koji se ističe na pozornici.', 0),
(52, 4, 'Katarina Kovač', 'Savršen za studijski rad! the box pro Achat 115 M pruža precizan zvuk i idealan je za snimanje glazbe u studiju. 5/5', 5),
(53, 4, 'Igor Ivić', 'Solidan izbor za profesionalce! the box pro Achat 115 M je pouzdan i pruža vrhunske performanse. 4/5', 4),
(54, 4, 'Ana Anić', 'Jednostavno fantastičan zvučnik! the box pro Achat 115 M je moj izbor za svaki događaj. Snaga zvuka je impresivna. 5/5', 5),
(55, 4, 'Davor Dabčević', 'Dobar zvučnik za razne prigode! the box pro Achat 115 M nudi svestranost i kvalitetu zvuka. Cijenim njegovu prilagodljivost. 4/5', 4),
(56, 6, 'Mia Mikić', 'the box pro Achat 112 M pruža izniman zvuk u kompaktnom paketu. Snažan bas i jasne visoke frekvencije.', 5),
(57, 6, 'Ivan Ivić', 'Ovaj zvučnik je pravi performer! the box pro Achat 112 M je odličan za live nastupe. Snaga zvuka je impresivna.', 5),
(58, 6, 'Lucija Lučić', 'Savršen za manje prostore! the box pro Achat 112 M pruža visokokvalitetan zvuk i lako se uklapa u svaki prostor.', 5),
(59, 6, 'Matija Matić', 'Dobar zvučnik za pristupačnu cijenu! the box pro Achat 112 M nudi solidne performanse po povoljnoj cijeni.', 4),
(60, 7, 'Iva Ivić', 'EV ELX 112 je vrhunski zvučnik! Kristalno jasan zvuk i visokokvalitetna izrada. Preporučujem ga svima.', 5),
(61, 7, 'Marko Marinković', 'Savršen za live nastupe! EV ELX 112 je pravi performer na pozornici. Snaga zvuka je impresivna, a bas je dubok.', 5),
(62, 7, 'Ana Anić', 'Elegantan dizajn i snažan zvuk! EV ELX 112 je odličan izbor za one koji traže kvalitetu i estetiku.', 5),
(63, 7, 'Nina Novak', 'Ovaj zvučnik je pravo čudo tehnologije! EV ELX 112 nudi vrhunsku izvedbu i preciznost zvuka.', 5),
(64, 7, 'Ivan Ivić', 'Dobar omjer cijene i kvalitete! EV ELX 112 pruža visokokvalitetan zvuk po razumnoj cijeni.', 4),
(65, 8, 'Martina Marić', 'the box PA 502 je izvrstan zvučnik! Snaga zvuka je fantastična, a izdržljivost je nevjerojatna.', 5),
(66, 8, 'Ante Antić', 'Ovaj zvučnik je savršen za live nastupe! the box PA 502 pruža snažan zvuk i lako se nosi s većim prostorima.', 5),
(67, 8, 'Katarina Kovač', 'Prijenosan i snažan! the box PA 502 je idealan za putovanja, ali pritom ne žrtvuje performanse.', 5),
(68, 8, 'Igor Ivić', 'Dobar zvučnik za razne događaje! the box PA 502 nudi solidne performanse po pristupačnoj cijeni.', 4),
(69, 9, 'Mia Mikić', 'EV ZLX 12 je fantastičan zvučnik! Izuzetna jasnoća zvuka i snažan bas. Oduševljena sam performansama.', 5),
(70, 9, 'Ivan Ivić', 'Odličan za live nastupe! EV ZLX 12 se ističe na pozornici. Snaga zvuka je impresivna, a visoke frekvencije su kristalno jasne.', 5),
(71, 9, 'Lucija Lučić', 'Svestran i kompaktan! EV ZLX 12 je savršen za različite prilike, a pri tome zadržava visoku kvalitetu zvuka.', 5),
(72, 10, 'Ana Anić', 'Bose S1 Pro System je vrhunski zvučnik! Izuzetna mobilnost i visoka kvaliteta zvuka. Preporučujem ga svima.', 5),
(73, 10, 'Ivan Ivić', 'Odličan za solo nastupe! Bose S1 Pro System pruža jasan i snažan zvuk, savršen za jednog izvođača.', 5),
(74, 11, 'Martina Marić', 'JBL EON715 je izvrstan zvučnik! Snažan zvuk i kompaktan dizajn. Oduševljena sam performansama.', 5),
(75, 11, 'Ante Antić', 'Idealan za live nastupe! JBL EON715 pruža impresivan zvuk na pozornici. Snaga zvuka je iznenađujuća.', 5),
(76, 11, 'Katarina Kovač', 'Prijenosan i snažan! JBL EON715 je savršen za putovanja, a pritom ne žrtvuje kvalitetu zvuka.', 5),
(77, 12, 'Mia Mikić', 'Behringer DR112DSP je izniman zvučnik! Svestran i s visokokvalitetnim zvukom. Oduševljena sam performansama.', 5),
(78, 12, 'Ivan Ivić', 'Odličan za live nastupe! Behringer DR112DSP pruža snažan i čist zvuk, savršen za koncerte.', 5),
(79, 12, 'Lucija Lučić', 'Savršen za razne prigode! Behringer DR112DSP je pouzdan i nudi visokokvalitetan zvuk.', 5),
(80, 12, 'Davor Dabčević', 'Impresivan zvuk u kompaktnom paketu! Behringer DR112DSP je odličan za manje prostore, ali pritom ne gubi na performansama.', 5),
(81, 12, 'Ana Anić', 'Dobar omjer cijene i kvalitete! Behringer DR112DSP nudi solidne performanse po pristupačnoj cijeni.', 4),
(82, 12, 'Igor Ivić', 'Prijenosan i snažan zvučnik! Behringer DR112DSP je idealan za putovanja, a pritom pruža vrhunski zvuk.', 5),
(83, 13, 'Martina Marić', 'Behringer DR115DSP je izvrstan zvučnik! Snažan i jasan zvuk, savršen za različite prigode.', 5),
(84, 13, 'Ante Antić', 'Impresivan za live nastupe! Behringer DR115DSP pruža snažan i čist zvuk, ističe se na pozornici.', 5),
(85, 13, 'Katarina Kovač', 'Savršen za evente! Behringer DR115DSP nudi pouzdanu izvedbu i visokokvalitetan zvuk.', 5),
(86, 13, 'Igor Ivić', 'Svestran i moćan! Behringer DR115DSP je odličan za razne prilike, a pritom održava visoke performanse.', 5),
(87, 13, 'Lucija Lučić', 'Dobar omjer cijene i kvalitete! Behringer DR115DSP nudi izvrsne performanse po pristupačnoj cijeni.', 4),
(88, 14, 'Mia Mikić', 'QSC K 8.2 je izuzetan zvučnik! Vrhunski zvuk i elegantan dizajn. Preporučujem ga svima.', 5),
(89, 14, 'Ivan Ivić', 'Odličan za live nastupe! QSC K 8.2 pruža snažan zvuk i lako se nosi s raznim situacijama.', 5),
(90, 14, 'Lucija Lučić', 'Savršen za manje prostore! QSC K 8.2 pruža visokokvalitetan zvuk, a pritom zadržava kompaktnu veličinu.', 5),
(91, 14, 'Davor Dabčević', 'Impresivan zvuk u kompaktnom paketu! QSC K 8.2 je odličan za mobilne situacije, a pritom ne žrtvuje kvalitetu zvuka.', 5),
(92, 14, 'Ana Anić', 'Dobar omjer cijene i kvalitete! QSC K 8.2 nudi visoke performanse po pristupačnoj cijeni.', 4),
(93, 14, 'Igor Ivić', 'Prijenosan i snažan zvučnik! QSC K 8.2 je idealan za putovanja, a pritom pruža vrhunski zvuk.', 5),
(94, 14, 'Martina Marić', 'Svestran i pouzdan! QSC K 8.2 je savršen za različite prilike, a pritom jamči vrhunsku izvedbu.', 5),
(95, 15, 'Marko Marinković', 'the box pro DSP 112 pruža izniman zvučnik! Visoka razlučivost zvuka i snažan bas. Oduševljen sam performansama.', 5),
(96, 15, 'Ana Anić', 'Odličan za live nastupe! the box pro DSP 112 se ističe na pozornici. Snaga zvuka je impresivna, a visoke frekvencije su kristalno jasne.', 5),
(97, 15, 'Nina Novak', 'Savršen za manje prostore! the box pro DSP 112 pruža visokokvalitetan zvuk, a pritom se lako uklapa u svaki prostor.', 5),
(98, 15, 'Luka Lukić', 'Impresivan zvuk u kompaktnom paketu! the box pro DSP 112 je odličan za mobilne situacije, a pritom ne žrtvuje kvalitetu zvuka.', 5),
(99, 15, 'Petra Petrović', 'Dobar omjer cijene i kvalitete! the box pro DSP 112 nudi solidne performanse po pristupačnoj cijeni.', 4),
(100, 16, 'Ivana Ivić', 'the box pro DSP108 pruža izniman zvučnik! Visoka razlučivost zvuka i snažan bas. Oduševljena sam performansama.', 5),
(101, 16, 'Marko Marinković', 'Impresivan zvuk u kompaktnom paketu! the box pro DSP108 je odličan za mobilne situacije, a pritom ne žrtvuje kvalitetu zvuka.', 4),
(102, 16, 'Ana Anić', 'Dobar omjer cijene i kvalitete! the box pro DSP108 nudi solidne performanse po pristupačnoj cijeni.', 5),
(103, 16, 'Nina Novak', 'Savršen za manje prostore! the box pro DSP108 pruža visokokvalitetan zvuk, a pritom se lako uklapa u svaki prostor.', 4),
(104, 17, 'Luka Lukić', 'the box pro DSP110 je izuzetan zvučnik! Vrhunski zvuk i elegantan dizajn. Preporučujem ga svima.', 5),
(105, 17, 'Petra Petrović', 'Savršen za live nastupe! the box pro DSP110 pruža impresivan zvuk na pozornici. Snaga zvuka je iznenađujuća.', 4),
(106, 17, 'Ivan Ivić', 'Prijenosan i snažan! the box pro DSP110 je savršen za putovanja, a pritom ne žrtvuje kvalitetu zvuka.', 5),
(107, 18, 'Martina Marić', 'Millenium BS-2211B MKII Set pruža izniman stalak za zvučnike! Čvrst i stabilan, idealan za studijsku opremu.', 5),
(108, 18, 'Igor Ivić', 'Dobar omjer cijene i kvalitete! Millenium BS-2211B MKII Set nudi solidne performanse po pristupačnoj cijeni.', 4),
(109, 19, 'Mia Mikić', 'the sssnake SM10BK je kvalitetan audio kabel! Pouzdan i dugotrajan, savršen za profesionalnu uporabu.', 5),
(110, 19, 'Davor Dabčević', 'Odličan za razne prigode! the sssnake SM10BK nudi pouzdanu izvedbu i visokokvalitetnu vezu.', 5),
(111, 19, 'Ana Anić', 'Prijenosan i snažan! the sssnake SM10BK je idealan za putovanja, a pritom pruža vrhunsku vezu.', 4),
(112, 20, 'Karlo Kovač', 'the sssnake SM6BK je izvrstan audio kabel! Visoka kvaliteta materijala i pouzdana veza.', 5),
(113, 20, 'Lea Lukić', 'Idealan za studio! the sssnake SM6BK pruža jasan i čist zvuk, savršen za profesionalne snimke.', 4),
(114, 20, 'Filip Filipović', 'Pouzdan i izdržljiv! the sssnake SM6BK se ističe svojom izdržljivošću i dugovječnošću.', 5),
(115, 20, 'Nika Novak', 'Dobar omjer cijene i kvalitete! the sssnake SM6BK nudi visoke performanse po pristupačnoj cijeni.', 4),
(116, 21, 'Iva Ivić', 'pro snake TPM 10 je kvalitetan patch kabel! Povezuje uređaje s preciznošću i pouzdanošću.', 5),
(117, 22, 'Marko Marinković', 'the sssnake Powercord UK C13 pruža izvrsnu strujnu vezu! Pouzdan i siguran kabel za napajanje.', 5),
(118, 22, 'Ana Anić', 'Savršen za audio opremu! the sssnake Powercord UK C13 nudi stabilnu struju za visokokvalitetan zvuk.', 4),
(119, 22, 'Ivan Ivić', 'Prijenosan i snažan! the sssnake Powercord UK C13 je odličan za putovanja, a pritom pruža vrhunsku sigurnost.', 5),
(120, 23, 'Luka Lukić', 'the sssnake Mains Power Cable je pouzdan strujni kabel! Održava stabilnu struju za vašu opremu.', 5),
(121, 23, 'Petra Petrović', 'Impresivan zvuk u kompaktnom paketu! the sssnake Mains Power Cable je odličan za mobilne situacije, a pritom ne žrtvuje kvalitetu zvuka.', 4),
(122, 24, 'Ivan Ivić', 'the sssnake pruža pouzdan audio kabel! Visoka kvaliteta materijala i stabilna veza.', 5),
(123, 24, 'Ana Anić', 'Kvalitetan i izdržljiv! the sssnake je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(124, 25, 'Nina Novak', 'Thomann V2020 Black 10 Pack pruža izvrsne žice! Visoka trajnost i preciznost u svakoj situaciji.', 5),
(125, 25, 'Luka Lukić', 'Pouzdan izbor! Thomann V2020 Black 10 Pack nudi izvrsnu kvalitetu zvuka za profesionalne snimke.', 4),
(126, 25, 'Igor Ivić', 'Savršen za live nastupe! Thomann V2020 Black 10 Pack osigurava jasan zvuk na pozornici.', 5),
(127, 26, 'Martina Marić', 'LD Systems Dave 18 G4X pruža snažan bas! Izvrsna izvedba za live nastupe i snimanje.', 5),
(128, 26, 'Davor Dabčević', 'Impresivan zvuk u kompaktnom paketu! LD Systems Dave 18 G4X je idealan za putovanja, a pritom pruža vrhunski zvuk.', 4),
(129, 27, 'Petra Petrović', 'JBL EON 715 Power Bundle je izuzetan zvučnik! Vrhunski zvuk i elegantan dizajn. Preporučujem ga svima.', 5),
(130, 28, 'Mia Mikić', 'the box CL 106/112MKII Basis Bundle pruža izniman sustav! Visoka kvaliteta zvuka i snažan bas. Oduševljena sam performansama.', 5),
(131, 28, 'Ivan Ivić', 'Impresivan za live nastupe! the box CL 106/112MKII Basis Bundle se ističe na pozornici. Snaga zvuka je impresivna, a visoke frekvencije su kristalno jasne.', 5),
(132, 28, 'Ana Anić', 'Savršen za manje prostore! the box CL 106/112MKII Basis Bundle pruža visokokvalitetan zvuk, a pritom se lako uklapa u svaki prostor.', 5),
(133, 29, 'Igor Ivić', 'the box CL 108/115MKII Basis Bundle je izvrstan zvučni sustav! Visoka razlučivost zvuka i snažan bas. Oduševljen sam performansama.', 5),
(134, 29, 'Lucija Lučić', 'Odličan za live nastupe! the box CL 108/115MKII Basis Bundle pruža snažan i čist zvuk, ističe se na pozornici.', 5),
(135, 29, 'Iva Ivić', 'Savršen za razne prigode! the box CL 108/115MKII Basis Bundle nudi pouzdanu izvedbu i visokokvalitetan zvuk.', 5),
(136, 29, 'Karlo Kovač', 'Impresivan zvuk u kompaktnom paketu! the box CL 108/115MKII Basis Bundle je odličan za mobilne situacije, a pritom ne žrtvuje kvalitetu zvuka.', 4),
(137, 29, 'Lea Lukić', 'Dobar omjer cijene i kvalitete! the box CL 108/115MKII Basis Bundle nudi solidne performanse po pristupačnoj cijeni.', 5),
(138, 29, 'Filip Filipović', 'Prijenosan i snažan! the box CL 108/115MKII Basis Bundle je idealan za putovanja, a pritom pruža vrhunski zvuk.', 5),
(139, 30, 'Iva Ivić', 'the box pro Achat 112 Sub A & DSP108 Set je izvrstan zvučni sustav! Visoka razlučivost zvuka i snažan bas. Oduševljena sam performansama.', 5),
(140, 30, 'Marko Marinković', 'Impresivan za live nastupe! the box pro Achat 112 Sub A & DSP108 Set pruža snažan i čist zvuk, ističe se na pozornici.', 5),
(141, 31, 'Ana Anić', 'the box pro DSX 110 M je kvalitetan subwoofer! Pruža snažan bas i impresivnu izvedbu. Preporučujem ga svima.', 5),
(142, 31, 'Nina Novak', 'Savršen za live nastupe! the box pro DSX 110 M pruža snažan i dubok bas, čini glazbu nevjerojatno dinamičnom.', 5),
(143, 31, 'Luka Lukić', 'Pouzdan izbor! the box pro DSX 110 M nudi visoku razlučivost i preciznost u reprodukciji niskih tonova.', 4),
(144, 32, 'Ivan Ivić', 'the box MA120 MKII je izvrstan zvučnik! Vrhunski zvuk i elegantan dizajn. Preporučujem ga svima.', 5),
(145, 32, 'Martina Marić', 'Savršen za manje prostore! the box MA120 MKII pruža visokokvalitetan zvuk, a pritom se lako uklapa u svaki prostor.', 5),
(146, 33, 'Petra Petrović', 'Stairville Stage Tape 400BK pruža izvrsnu traku za stage! Dugotrajna i izdržljiva, savršena za postavljanje opreme na pozornici.', 5),
(147, 33, 'Davor Dabčević', 'Pouzdana traka za stage! Stairville Stage Tape 400BK je savršena za fiksiranje kabela i opreme na pozornici.', 4),
(148, 33, 'Mia Mikić', 'Idealna za označavanje! Stairville Stage Tape 400BK se ističe svojom vidljivošću i dugotrajnošću.', 5),
(149, 33, 'Ana Anić', 'Dobar omjer cijene i kvalitete! Stairville Stage Tape 400BK nudi solidnu izvedbu po pristupačnoj cijeni.', 4),
(150, 34, 'Igor Ivić', 'the sssnake SM6RD je kvalitetan audio kabel! Pouzdan i dugotrajan, savršen za profesionalnu uporabu.', 5),
(151, 34, 'Lucija Lučić', 'Odličan za studio! the sssnake SM6RD pruža jasan i čist zvuk, savršen za profesionalne snimke.', 4),
(152, 35, 'Iva Ivić', 'the sssnake SK233-1,5 XLR Patch pruža pouzdanu vezu! Visoka kvaliteta materijala i stabilna veza.', 5),
(153, 35, 'Marko Marinković', 'Kvalitetan i izdržljiv! the sssnake SK233-1,5 XLR Patch je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(154, 36, 'Ana Anić', 'Behringer B615D pruža snažan zvuk! Visoka razlučivost i impresivna snaga. Oduševljena sam performansama.', 5),
(155, 36, 'Nina Novak', 'Savršen za live nastupe! Behringer B615D osigurava jasan i snažan zvuk na pozornici.', 5),
(156, 36, 'Luka Lukić', 'Impresivan zvuk u kompaktnom paketu! Behringer B615D je odličan za mobilne situacije, a pritom pruža vrhunsku kvalitetu zvuka.', 4),
(157, 36, 'Igor Ivić', 'Pouzdan i izdržljiv! Behringer B615D se ističe svojom izdržljivošću i dugovječnošću.', 5),
(158, 37, 'Petra Petrović', 'the box pro Achat 112 A je izvrstan zvučnik! Vrhunski zvuk i elegantan dizajn. Preporučujem ga svima.', 5),
(159, 37, 'Davor Dabčević', 'Savršen za manje prostore! the box pro Achat 112 A pruža visokokvalitetan zvuk, a pritom se lako uklapa u svaki prostor.', 5),
(160, 37, 'Mia Mikić', 'Prijenosan i snažan! the box pro Achat 112 A je savršen za putovanja, a pritom ne žrtvuje kvalitetu zvuka.', 4),
(161, 38, 'Ana Anić', 'the box PA 302 A je kvalitetan zvučnik! Pruža jasan zvuk i pouzdanu izvedbu.', 5),
(162, 39, 'Ivan Ivić', 'Behringer B115W pruža impresivan zvuk! Visoka razlučivost i snažan bas. Oduševljen sam performansama.', 5),
(163, 39, 'Martina Marić', 'Savršen za live nastupe! Behringer B115W osigurava jasan i snažan zvuk na pozornici.', 5),
(164, 40, 'Davor Dabčević', 'EV ZLX 12P je izuzetan zvučnik! Vrhunski zvuk i elegantan dizajn. Preporučujem ga svima.', 5),
(165, 40, 'Petra Petrović', 'Savršen za live nastupe! EV ZLX 12P pruža impresivan zvuk na pozornici. Snaga zvuka je iznenađujuća.', 5),
(166, 40, 'Igor Ivić', 'Prijenosan i snažan! EV ZLX 12P je savršen za putovanja, a pritom ne žrtvuje kvalitetu zvuka.', 4),
(167, 40, 'Lucija Lučić', 'Dobar omjer cijene i kvalitete! EV ZLX 12P nudi solidne performanse po pristupačnoj cijeni.', 5),
(168, 40, 'Karlo Kovač', 'Impresivan zvuk u kompaktnom paketu! EV ZLX 12P je odličan za mobilne situacije, a pritom ne žrtvuje kvalitetu zvuka.', 5),
(169, 40, 'Lea Lukić', 'Savršen za razne prigode! EV ZLX 12P nudi pouzdanu izvedbu i visokokvalitetan zvuk.', 5),
(170, 40, 'Filip Filipović', 'Prijenosan i snažan! EV ZLX 12P je idealan za putovanja, a pritom pruža vrhunski zvuk.', 5),
(171, 41, 'Iva Ivić', 'the box pro Mon A12 pruža vrhunski zvuk! Visoka razlučivost i impresivna snaga. Oduševljena sam performansama.', 5),
(172, 41, 'Marko Marinković', 'Impresivan za live nastupe! the box pro Mon A12 osigurava jasan i snažan zvuk na pozornici.', 5),
(173, 41, 'Ana Anić', 'Savršen za studio! the box pro Mon A12 pruža visokokvalitetan zvuk, idealan za profesionalne snimke.', 5),
(174, 42, 'Nina Novak', 'Behringer B112D je kvalitetan zvučnik! Pruža jasan zvuk i pouzdanu izvedbu.', 5),
(175, 42, 'Luka Lukić', 'Savršen za live nastupe! Behringer B112D osigurava jasan i snažan zvuk na pozornici.', 5),
(176, 43, 'Ivan Ivić', 'the box PA 502 pruža snažan zvuk! Visoka razlučivost i impresivna snaga. Oduševljen sam performansama.', 5),
(177, 43, 'Martina Marić', 'Pouzdan zvučnik! the box PA 502 nudi visokokvalitetnu izvedbu po pristupačnoj cijeni.', 4),
(178, 44, 'Davor Dabčević', 'the box pro Achat 204 A je izvrstan zvučnik! Vrhunski zvuk i elegantan dizajn. Preporučujem ga svima.', 5),
(179, 45, 'Petra Petrović', 'the box MA120 MKII je izuzetan zvučnik! Vrhunski zvuk i elegantan dizajn. Preporučujem ga svima.', 5),
(180, 45, 'Davor Dabčević', 'Savršen za manje prostore! the box MA120 MKII pruža visokokvalitetan zvuk, a pritom se lako uklapa u svaki prostor.', 5),
(181, 45, 'Mia Mikić', 'Prijenosan i snažan! the box MA120 MKII je savršen za putovanja, a pritom ne žrtvuje kvalitetu zvuka.', 4),
(182, 46, 'Ana Anić', 'pro snake TPM 6 pruža pouzdanu vezu! Visoka kvaliteta materijala i stabilna veza.', 5),
(183, 46, 'Igor Ivić', 'Kvalitetan i izdržljiv! pro snake TPM 6 je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(184, 47, 'Lucija Lučić', 'Millenium MS 2003 pruža izvrstan stalak za mikrofone! Čvrst i stabilan, idealan za studijsku opremu.', 5),
(185, 47, 'Karlo Kovač', 'Dobar omjer cijene i kvalitete! Millenium MS 2003 nudi solidne performanse po pristupačnoj cijeni.', 4),
(186, 47, 'Lea Lukić', 'Impresivan za live nastupe! Millenium MS 2003 je odličan za mobilne situacije, a pritom pruža vrhunsku kvalitetu.', 5),
(187, 48, 'Filip Filipović', 'the sssnake 1820 Adapter je kvalitetan adapter! Pruža stabilnu vezu i visoku kompatibilnost.', 5),
(188, 49, 'Iva Ivić', 'Millenium BS-2020S MK II pruža izvrstan stalak! Čvrst i stabilan, savršen za studijsku opremu.', 5),
(189, 49, 'Marko Marinković', 'Dobar omjer cijene i kvalitete! Millenium BS-2020S MK II nudi solidne performanse po pristupačnoj cijeni.', 4),
(190, 49, 'Ana Anić', 'Impresivan za live nastupe! Millenium BS-2020S MK II je odličan za mobilne situacije, a pritom pruža vrhunsku kvalitetu zvuka.', 5),
(191, 49, 'Nina Novak', 'Savršen za manje prostore! Millenium BS-2020S MK II pruža visokokvalitetan zvuk, a pritom se lako uklapa u svaki prostor.', 5),
(192, 50, 'Luka Lukić', 'Millenium BS-2011 MK II je izuzetan stalak! Vrhunski zvuk i elegantan dizajn. Preporučujem ga svima.', 5),
(193, 50, 'Igor Ivić', 'Savršen za live nastupe! Millenium BS-2011 MK II osigurava jasan i snažan zvuk na pozornici.', 5),
(194, 50, 'Petra Petrović', 'Pouzdan stalak! Millenium BS-2011 MK II nudi izdržljivost i stabilnost.', 4),
(195, 50, 'Davor Dabčević', 'Idealan za studio! Millenium BS-2011 MK II pruža visokokvalitetan zvuk, idealan za profesionalne snimke.', 5),
(196, 51, 'Mia Mikić', 'the t.amp TA 2400 MK-X pruža snažan zvuk! Visoka razlučivost i impresivna snaga. Oduševljen sam performansama.', 5),
(197, 51, 'Ana Anić', 'Pouzdan i izdržljiv! the t.amp TA 2400 MK-X je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(198, 51, 'Ivan Ivić', 'Impresivan zvuk u kompaktnom paketu! the t.amp TA 2400 MK-X je odličan za mobilne situacije, a pritom pruža vrhunsku kvalitetu zvuka.', 5),
(199, 52, 'Lucija Lučić', 'Fun Generation PicoSpot 20 LED pruža izniman svjetlosni efekt! Visoka razlučivost i raznolike boje. Oduševljena sam performansama.', 5),
(200, 52, 'Karlo Kovač', 'Impresivan za evente! Fun Generation PicoSpot 20 LED se ističe svojim dinamičnim svjetlosnim efektima.', 5),
(201, 52, 'Lea Lukić', 'Savršen za manje prostore! Fun Generation PicoSpot 20 LED pruža visokokvalitetno osvjetljenje, a pritom se lako uklapa u svaki prostor.', 5),
(202, 52, 'Filip Filipović', 'Prijenosan i snažan! Fun Generation PicoSpot 20 LED je savršen za putovanja, a pritom ne žrtvuje kvalitetu svjetlosnih efekata.', 4),
(203, 52, 'Iva Ivić', 'Dobar omjer cijene i kvalitete! Fun Generation PicoSpot 20 LED nudi solidne performanse po pristupačnoj cijeni.', 4),
(204, 53, 'Marko Marinković', 'Thomann Case Behringer B 207 pruža izvrstan zaštitni etui! Čvrst i otporan na vanjske utjecaje.', 5),
(205, 53, 'Ana Anić', 'Dobar omjer cijene i kvalitete! Thomann Case Behringer B 207 nudi pouzdanu zaštitu za opremu.', 4),
(206, 53, 'Nina Novak', 'Prijenosan i praktičan! Thomann Case Behringer B 207 je savršen za putovanja, štiti opremu od oštećenja.', 5),
(207, 53, 'Luka Lukić', 'Dobar omjer cijene i kvalitete! Thomann Case Behringer B 207 nudi solidne performanse po pristupačnoj cijeni.', 4),
(208, 53, 'Igor Ivić', 'Thomann Case Behringer B 207 pruža izdržljivost i sigurnost za opremu.', 5),
(209, 53, 'Petra Petrović', 'Idealan za transport opreme! Thomann Case Behringer B 207 se ističe svojom praktičnošću i pouzdanošću.', 5),
(210, 53, 'Davor Dabčević', 'Savršen za prijevoz opreme! Thomann Case Behringer B 207 pruža pouzdanu i sigurnu zaštitu.', 5),
(211, 54, 'Martina Marić', 'Numark Mixstream Pro+ pruža izuzetne performanse! Visoka razlučivost zvuka i intuitivan dizajn. Oduševljena sam funkcionalnostima.', 5),
(212, 54, 'Ana Anić', 'Impresivan za live nastupe! Numark Mixstream Pro+ osigurava jasan i snažan zvuk na pozornici.', 5),
(213, 54, 'Ivan Ivić', 'Pouzdan i izdržljiv! Numark Mixstream Pro+ je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(214, 54, 'Mia Mikić', 'Savršen za mobilne situacije! Numark Mixstream Pro+ se ističe svojim prijenosnim dizajnom i visokim performansama.', 5),
(215, 54, 'Lucija Lučić', 'Dobar omjer cijene i kvalitete! Numark Mixstream Pro+ nudi solidne performanse po pristupačnoj cijeni.', 4),
(216, 54, 'Karlo Kovač', 'Pouzdan i praktičan! Numark Mixstream Pro+ pruža intuitivne kontrole i jednostavno korištenje.', 5),
(217, 54, 'Lea Lukić', 'Savršen za mobilne situacije! Numark Mixstream Pro+ se ističe svojom prenosivošću i visokokvalitetnim zvukom.', 5),
(218, 54, 'Filip Filipović', 'Svestran i funkcionalan! Numark Mixstream Pro+ pruža različite opcije za kontrolu zvuka i reprodukciju glazbe.', 5),
(219, 55, 'Iva Ivić', 'Allen and Heath ZED-14 pruža izuzetan mikser! Visoka razlučivost zvuka i pouzdane funkcije. Oduševljena sam performansama.', 5),
(220, 55, 'Marko Marinković', 'Savršen za snimanje! Allen and Heath ZED-14 se ističe svojim mogućnostima za studio.', 5),
(221, 55, 'Ana Anić', 'Pouzdan i izdržljiv! Allen and Heath ZED-14 je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(222, 55, 'Nina Novak', 'Impresivan za live nastupe! Allen and Heath ZED-14 osigurava jasan i snažan zvuk na pozornici.', 5),
(223, 55, 'Luka Lukić', 'Dobar omjer cijene i kvalitete! Allen and Heath ZED-14 nudi solidne performanse po pristupačnoj cijeni.', 4),
(224, 55, 'Igor Ivić', 'Savršen za manje prostore! Allen and Heath ZED-14 pruža visokokvalitetan zvuk, a pritom se lako uklapa u svaki prostor.', 5),
(225, 55, 'Petra Petrović', 'Allen and Heath ZED-14 pruža izdržljivost i pouzdanost.', 5),
(226, 55, 'Davor Dabčević', 'Dobar omjer cijene i kvalitete! Allen and Heath ZED-14 nudi solidne performanse po pristupačnoj cijeni.', 4),
(227, 57, 'Mia Mikić', 'Botex USB Stick 16GB pruža pouzdanu pohranu podataka! Visok kapacitet i brza prijenosna brzina. Oduševljena sam performansama.', 5),
(228, 57, 'Ana Anić', 'Praktičan i svestran! Botex USB Stick 16GB je savršen za pohranu glazbe i podataka.', 5),
(229, 57, 'Ivan Ivić', 'Savršen za profesionalnu uporabu! Botex USB Stick 16GB pruža pouzdanu pohranu podataka i izdržljivost.', 5),
(230, 58, 'Petra Petrović', 'Fun Generation Eco Wood 1210er pruža izuzetan stalak! Čvrst i stabilan, savršen za studijsku opremu.', 5),
(231, 58, 'Davor Dabčević', 'Dobar omjer cijene i kvalitete! Fun Generation Eco Wood 1210er nudi solidne performanse po pristupačnoj cijeni.', 4),
(232, 58, 'Martina Marić', 'Impresivan za live nastupe! Fun Generation Eco Wood 1210er je odličan za mobilne situacije, a pritom pruža vrhunsku kvalitetu zvuka.', 5),
(233, 58, 'Mia Mikić', 'Savršen za manje prostore! Fun Generation Eco Wood 1210er pruža visokokvalitetan zvuk, a pritom se lako uklapa u svaki prostor.', 5),
(234, 59, 'Igor Ivić', 'Thon Case Pioneer CDJ-3000 PB pruža izvrstan zaštitni etui! Čvrst i otporan na vanjske utjecaje.', 5),
(235, 59, 'Nina Novak', 'Dobar omjer cijene i kvalitete! Thon Case Pioneer CDJ-3000 PB nudi pouzdanu zaštitu za opremu.', 4),
(236, 59, 'Luka Lukić', 'Prijenosan i praktičan! Thon Case Pioneer CDJ-3000 PB je savršen za putovanja, štiti opremu od oštećenja.', 5),
(237, 59, 'Ivan Ivić', 'Dobar omjer cijene i kvalitete! Thon Case Pioneer CDJ-3000 PB nudi solidne performanse po pristupačnoj cijeni.', 4),
(238, 59, 'Karlo Kovač', 'Thon Case Pioneer CDJ-3000 PB pruža izdržljivost i sigurnost za opremu.', 5),
(239, 59, 'Petra Petrović', 'Idealan za transport opreme! Thon Case Pioneer CDJ-3000 PB se ističe svojom praktičnošću i pouzdanošću.', 5),
(240, 59, 'Davor Dabčević', 'Savršen za prijevoz opreme! Thon Case Pioneer CDJ-3000 PB pruža pouzdanu i sigurnu zaštitu.', 5),
(241, 60, 'Martina Marić', 'EV Everse 8 Raincover pruža izuzetnu zaštitu od kiše! Vodootporan materijal i praktičan dizajn.', 5),
(242, 60, 'Ana Anić', 'Praktičan i svestran! EV Everse 8 Raincover je savršen zaštita za vanjske događaje.', 5),
(243, 60, 'Iva Ivić', 'Savršen za live nastupe! EV Everse 8 Raincover osigurava zaštitu od nepredviđenih vremenskih uvjeta.', 5),
(244, 62, 'Ivan Ivić', 'Thomann Bose S1 PRO Bag Premium pruža izvrstan zaštitni etui! Čvrst i otporan na vanjske utjecaje.', 5),
(245, 62, 'Nina Novak', 'Dobar omjer cijene i kvalitete! Thomann Bose S1 PRO Bag Premium nudi pouzdanu zaštitu za opremu.', 4),
(246, 65, 'Petra Petrović', 'Sony MDR-MV1 pruža izuzetan zvuk! Visoka razlučivost i udobnost. Oduševljena sam performansama.', 5),
(247, 65, 'Davor Dabčević', 'Impresivan zvuk! Sony MDR-MV1 se ističe svojom visokokvalitetnom reprodukcijom zvuka.', 5),
(248, 65, 'Martina Marić', 'Udoban i kvalitetan! Sony MDR-MV1 je idealan za uživanje u glazbi s visokokvalitetnim zvukom.', 5),
(249, 66, 'Ana Anić', 'Native Instruments Traktor S2 MK3 pruža izuzetne performanse! Visoka razlučivost zvuka i intuitivan dizajn. Oduševljena sam funkcionalnostima.', 5),
(250, 66, 'Ivan Ivić', 'Savršen za live nastupe! Native Instruments Traktor S2 MK3 osigurava jasan i snažan zvuk na pozornici.', 5),
(251, 67, 'Lucija Lučić', 'Numark Mixtrack Platinum FX pruža izuzetne performanse! Visoka razlučivost zvuka i intuitivan dizajn. Oduševljena sam funkcionalnostima.', 5),
(252, 67, 'Karlo Kovač', 'Impresivan za live nastupe! Numark Mixtrack Platinum FX osigurava jasan i snažan zvuk na pozornici.', 5),
(253, 67, 'Lea Lukić', 'Pouzdan i izdržljiv! Numark Mixtrack Platinum FX je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(254, 67, 'Filip Filipović', 'Savršen za mobilne situacije! Numark Mixtrack Platinum FX se ističe svojim prijenosnim dizajnom i visokim performansama.', 5),
(255, 68, 'Iva Ivić', 'Hercules DJ Control Inpulse T7 pruža izuzetne performanse! Visoka razlučivost zvuka i intuitivan dizajn. Oduševljena sam funkcionalnostima.', 5),
(256, 68, 'Marko Marinković', 'Savršen za live nastupe! Hercules DJ Control Inpulse T7 osigurava jasan i snažan zvuk na pozornici.', 5),
(257, 69, 'Ana Anić', 'Denon DJ Prime 4+ pruža izuzetne performanse! Visoka razlučivost zvuka i intuitivan dizajn. Oduševljena sam funkcionalnostima.', 5),
(258, 69, 'Nina Novak', 'Impresivan za live nastupe! Denon DJ Prime 4+ osigurava jasan i snažan zvuk na pozornici.', 5),
(259, 69, 'Luka Lukić', 'Pouzdan i izdržljiv! Denon DJ Prime 4+ je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(260, 69, 'Igor Ivić', 'Savršen za mobilne situacije! Denon DJ Prime 4+ se ističe svojim prijenosnim dizajnom i visokim performansama.', 5),
(261, 70, 'Petra Petrović', 'Rane Four pruža izuzetan mixer! Visoka razlučivost zvuka i pouzdane funkcije. Oduševljena sam performansama.', 5),
(262, 70, 'Davor Dabčević', 'Savršen za snimanje! Rane Four se ističe svojim mogućnostima za studio.', 5),
(263, 70, 'Martina Marić', 'Pouzdan i izdržljiv! Rane Four je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(264, 70, 'Mia Mikić', 'Impresivan za live nastupe! Rane Four osigurava jasan i snažan zvuk na pozornici.', 5),
(265, 72, 'Lucija Lučić', 'Native Instruments Traktor S3 pruža izuzetne performanse! Visoka razlučivost zvuka i intuitivan dizajn. Oduševljena sam funkcionalnostima.', 5),
(266, 72, 'Karlo Kovač', 'Savršen za live nastupe! Native Instruments Traktor S3 osigurava jasan i snažan zvuk na pozornici.', 5),
(267, 72, 'Lea Lukić', 'Pouzdan i izdržljiv! Native Instruments Traktor S3 je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(268, 72, 'Filip Filipović', 'Savršen za mobilne situacije! Native Instruments Traktor S3 se ističe svojim prijenosnim dizajnom i visokim performansama.', 5),
(269, 72, 'Iva Ivić', 'Dobar omjer cijene i kvalitete! Native Instruments Traktor S3 nudi solidne performanse po pristupačnoj cijeni.', 4),
(270, 73, 'Marko Marinković', 'Yamaha MG16XU pruža izuzetan mixer! Visoka razlučivost zvuka i pouzdane funkcije. Oduševljena sam performansama.', 5),
(271, 73, 'Ana Anić', 'Savršen za snimanje! Yamaha MG16XU se ističe svojim mogućnostima za studio.', 5),
(272, 73, 'Nina Novak', 'Pouzdan i izdržljiv! Yamaha MG16XU je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(273, 73, 'Luka Lukić', 'Impresivan za live nastupe! Yamaha MG16XU osigurava jasan i snažan zvuk na pozornici.', 5),
(274, 74, 'Igor Ivić', 'Mackie Onyx8 pruža izuzetan mixer! Visoka razlučivost zvuka i pouzdane funkcije. Oduševljena sam performansama.', 5),
(275, 74, 'Petra Petrović', 'Savršen za snimanje! Mackie Onyx8 se ističe svojim mogućnostima za studio.', 5),
(276, 74, 'Davor Dabčević', 'Pouzdan i izdržljiv! Mackie Onyx8 je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(277, 75, 'Martina Marić', 'Mackie ProFX12v3 pruža izuzetan mixer! Visoka razlučivost zvuka i pouzdane funkcije. Oduševljena sam performansama.', 5),
(278, 75, 'Mia Mikić', 'Savršen za snimanje! Mackie ProFX12v3 se ističe svojim mogućnostima za studio.', 5),
(279, 75, 'Ana Anić', 'Pouzdan i izdržljiv! Mackie ProFX12v3 je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(280, 77, 'Ivan Ivić', 'Behringer Xenyx X1204 USB pruža izuzetan mixer! Visoka razlučivost zvuka i pouzdane funkcije. Oduševljena sam performansama.', 5),
(281, 77, 'Nina Novak', 'Savršen za snimanje! Behringer Xenyx X1204 USB se ističe svojim mogućnostima za studio.', 5),
(282, 77, 'Luka Lukić', 'Pouzdan i izdržljiv! Behringer Xenyx X1204 USB je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(283, 77, 'Igor Ivić', 'Savršen za live nastupe! Behringer Xenyx X1204 USB osigurava jasan i snažan zvuk na pozornici.', 5),
(284, 80, 'Petra Petrović', 'the sssnake 1672 Adapter pruža izuzetan adapter! Visoka razlučivost zvuka i pouzdanost. Oduševljena sam performansama.', 5),
(285, 80, 'Davor Dabčević', 'Pouzdan i izdržljiv! the sssnake 1672 Adapter je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(286, 80, 'Martina Marić', 'Savršen za live nastupe! the sssnake 1672 Adapter osigurava jasan i snažan zvuk na pozornici.', 5),
(287, 81, 'Mia Mikić', 'the sssnake 1843 Adapter pruža izuzetan adapter! Visoka razlučivost zvuka i pouzdanost. Oduševljena sam performansama.', 5),
(288, 81, 'Ana Anić', 'Pouzdan i izdržljiv! the sssnake 1843 Adapter je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(289, 83, 'Ivan Ivić', 'Apple Lightning to 3,5 mm Adapter pruža izuzetan adapter! Visoka razlučivost zvuka i pouzdanost. Oduševljena sam performansama.', 5),
(290, 83, 'Nina Novak', 'Praktičan i svestran! Apple Lightning to 3,5 mm Adapter je savršen za povezivanje različitih uređaja.', 5),
(291, 83, 'Luka Lukić', 'Savršen za mobilne situacije! Apple Lightning to 3,5 mm Adapter je prijenosan i jednostavan za uporabu.', 5),
(292, 83, 'Igor Ivić', 'Dobar omjer cijene i kvalitete! Apple Lightning to 3,5 mm Adapter nudi solidne performanse po pristupačnoj cijeni.', 4),
(293, 86, 'Petra Petrović', 'Eurolite TMH-13 Moving-Head Spot pruža izuzetan svjetlosni efekt! Visoka razlučivost i raznolike boje. Oduševljena sam performansama.', 5),
(294, 86, 'Davor Dabčević', 'Impresivan za evente! Eurolite TMH-13 Moving-Head Spot se ističe svojim dinamičnim svjetlosnim efektima.', 5),
(295, 86, 'Martina Marić', 'Savršen za manje prostore! Eurolite TMH-13 Moving-Head Spot pruža visokokvalitetno osvjetljenje, a pritom se lako uklapa u svaki prostor.', 5),
(296, 87, 'Mia Mikić', 'Eurolite LED TMH-X4 Zoom Wash pruža izuzetan svjetlosni efekt! Visoka razlučivost i raznolike boje. Oduševljena sam performansama.', 5),
(297, 87, 'Ana Anić', 'Dobar omjer cijene i kvalitete! Eurolite LED TMH-X4 Zoom Wash nudi solidne performanse po pristupačnoj cijeni.', 4),
(298, 87, 'Ivan Ivić', 'Savršen za evente! Eurolite LED TMH-X4 Zoom Wash se ističe svojim dinamičnim svjetlosnim efektima.', 5),
(299, 87, 'Nina Novak', 'Prijenosan i snažan! Eurolite LED TMH-X4 Zoom Wash je savršen za putovanja, a pritom ne žrtvuje kvalitetu svjetlosnih efekata.', 4),
(300, 87, 'Luka Lukić', 'Impresivan za manje prostore! Eurolite LED TMH-X4 Zoom Wash pruža visokokvalitetno osvjetljenje, a pritom se lako uklapa u svaki prostor.', 5),
(301, 87, 'Igor Ivić', 'Eurolite LED TMH-X4 Zoom Wash pruža visokokvalitetne svjetlosne efekte.', 5),
(302, 88, 'Karlo Kovač', 'Varytec Hero Wash 712 Z RGBW Zoom pruža izuzetan svjetlosni efekt! Visoka razlučivost i raznolike boje. Oduševljen sam performansama.', 5),
(303, 88, 'Lea Lukić', 'Dobar omjer cijene i kvalitete! Varytec Hero Wash 712 Z RGBW Zoom nudi solidne performanse po pristupačnoj cijeni.', 4),
(304, 88, 'Filip Filipović', 'Savršen za evente! Varytec Hero Wash 712 Z RGBW Zoom se ističe svojim dinamičnim svjetlosnim efektima.', 5),
(305, 88, 'Iva Ivić', 'Prijenosan i snažan! Varytec Hero Wash 712 Z RGBW Zoom je savršen za putovanja, a pritom ne žrtvuje kvalitetu svjetlosnih efekata.', 4),
(306, 88, 'Marko Marinković', 'Impresivan za manje prostore! Varytec Hero Wash 712 Z RGBW Zoom pruža visokokvalitetno osvjetljenje, a pritom se lako uklapa u svaki prostor.', 5),
(307, 88, 'Ana Anić', 'Varytec Hero Wash 712 Z RGBW Zoom pruža visokokvalitetne svjetlosne efekte.', 5),
(308, 90, 'Nina Novak', 'Cameo NanoBeam 600 pruža izuzetan svjetlosni efekt! Visoka razlučivost i raznolike boje. Oduševljena sam performansama.', 5),
(309, 90, 'Luka Lukić', 'Savršen za evente! Cameo NanoBeam 600 se ističe svojim dinamičnim svjetlosnim efektima.', 5),
(310, 90, 'Ivan Ivić', 'Prijenosan i snažan! Cameo NanoBeam 600 je savršen za putovanja, a pritom ne žrtvuje kvalitetu svjetlosnih efekata.', 4),
(311, 90, 'Igor Ivić', 'Dobar omjer cijene i kvalitete! Cameo NanoBeam 600 nudi solidne performanse po pristupačnoj cijeni.', 4),
(312, 91, 'Petra Petrović', 'Cameo ROOT Par 6 pruža izuzetan svjetlosni efekt! Visoka razlučivost i raznolike boje. Oduševljena sam performansama.', 5),
(313, 91, 'Davor Dabčević', 'Savršen za evente! Cameo ROOT Par 6 se ističe svojim dinamičnim svjetlosnim efektima.', 5),
(314, 91, 'Martina Marić', 'Pouzdan i izdržljiv! Cameo ROOT Par 6 je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(315, 91, 'Mia Mikić', 'Dobar omjer cijene i kvalitete! Cameo ROOT Par 6 nudi solidne performanse po pristupačnoj cijeni.', 4),
(316, 92, 'Ana Anić', 'Showtec Compact Par 18 MKII Black pruža izuzetan svjetlosni efekt! Visoka razlučivost i raznolike boje. Oduševljena sam performansama.', 5),
(317, 92, 'Ivan Ivić', 'Savršen za evente! Showtec Compact Par 18 MKII Black se ističe svojim dinamičnim svjetlosnim efektima.', 5),
(318, 92, 'Nina Novak', 'Pouzdan i izdržljiv! Showtec Compact Par 18 MKII Black je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(319, 92, 'Luka Lukić', 'Dobar omjer cijene i kvalitete! Showtec Compact Par 18 MKII Black nudi solidne performanse po pristupačnoj cijeni.', 4),
(320, 92, 'Igor Ivić', 'Showtec Compact Par 18 MKII Black pruža visokokvalitetne svjetlosne efekte.', 5),
(321, 92, 'Petra Petrović', 'Savršen za manje prostore! Showtec Compact Par 18 MKII Black pruža visokokvalitetno osvjetljenje, a pritom se lako uklapa u svaki prostor.', 5),
(322, 93, 'Davor Dabčević', 'the t.amp E4-250 pruža izuzetan pojačalo! Visoka snaga i pouzdanost. Oduševljen sam performansama.', 5),
(323, 93, 'Martina Marić', 'Savršen za live nastupe! the t.amp E4-250 osigurava snažan zvuk na pozornici.', 5),
(324, 93, 'Mia Mikić', 'Pouzdan i izdržljiv! the t.amp E4-250 je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(325, 93, 'Ana Anić', 'Dobar omjer cijene i kvalitete! the t.amp E4-250 nudi solidne performanse po pristupačnoj cijeni.', 4),
(326, 101, 'Nina Novak', 'the box TA Power Bundle pruža izuzetan zvučni sustav! Visoka razlučivost i snažan bas. Oduševljena sam performansama.', 5),
(327, 101, 'Luka Lukić', 'Savršen za live nastupe! the box TA Power Bundle osigurava jasan i snažan zvuk na pozornici.', 5),
(328, 101, 'Ivan Ivić', 'Pouzdan i izdržljiv! the box TA Power Bundle je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(329, 102, 'Igor Ivić', 'Fun Generation Satmix 2.1 Bundle pruža izuzetan zvučni sustav! Visoka razlučivost i snažan bas. Oduševljen sam performansama.', 5),
(330, 102, 'Petra Petrović', 'Savršen za live nastupe! Fun Generation Satmix 2.1 Bundle osigurava jasan i snažan zvuk na pozornici.', 5),
(331, 102, 'Davor Dabčević', 'Pouzdan i izdržljiv! Fun Generation Satmix 2.1 Bundle je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4),
(332, 107, 'Martina Marić', 'Seeburg Acoustic Line A6 pruža izuzetan zvučni sustav! Visoka razlučivost i snažan bas. Oduševljena sam performansama.', 5),
(333, 107, 'Mia Mikić', 'Savršen za live nastupe! Seeburg Acoustic Line A6 osigurava jasan i snažan zvuk na pozornici.', 5),
(334, 107, 'Ana Anić', 'Pouzdan i izdržljiv! Seeburg Acoustic Line A6 je idealan za profesionalnu uporabu, dugotrajan i pouzdan.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `surname` varchar(24) NOT NULL,
  `address` varchar(60) NOT NULL,
  `postalCode` int(8) NOT NULL,
  `city` varchar(24) NOT NULL,
  `state` varchar(16) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `email` varchar(34) NOT NULL,
  `passwordUser` varchar(100) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `address`, `postalCode`, `city`, `state`, `contactNumber`, `email`, `passwordUser`, `status`) VALUES
(14, 'Ana', 'Horvat', 'Mlinarska 3', 10000, 'Zagreb', 'Hrvatska', '+38598765432', 'ana.horvat@gmail.com', '$2y$10$KW3sFOiBX90WDlSdk3n/Muh2VWgnKpLmbyHzeqg3oIGMBun06lbHC', 'user'),
(15, 'Ivana', 'Božić', 'Ilije Garačanina 15', 11000, 'Beograd', 'Srbija', '+381641234567', 'ivana.bozic@gmail.com', '$2y$10$GBCvwwwGQ91ld5JKBT3OEuXC1wr60d1fQQNRRS3WyYw1SlOrse9zm', 'user'),
(16, 'Adis', 'Smajlović', 'Đoke Mazalića 23', 71000, 'Sarajevo', 'BiH', '+38761123456', 'adis.smajlovic@yahoo.com', '$2y$10$I/v4kZPvFaZX7RHxRqaPj.8C5RyBBoqwuVSLiqKonQ4ilNvwROtMe', 'user'),
(17, 'Gergely', 'Nagy', 'Dózsa György út 1', 1056, 'Budimpešta', 'Mađarska', '+36201234567', 'gergely.nagy@hotmail.com', '$2y$10$FWYoV6cn2BG49XBUR4pdoeAnMp3YSA5LTHpqw7dkRkWZzsW1gN46m', 'user'),
(18, 'Luka', 'Novak', 'Mariborska cesta 44', 2000, 'Maribor', 'Slovenija', '+38640123456', 'luka.novak@gmail.com', '$2y$10$MevmkQgN5W2z7ZANBii5/eaC1392BYLWkx3wwNNFVe/OzdBMhAyg6', 'user'),
(19, 'Marco', 'Rossi', 'Via Roma 14', 100, 'Rim', 'Italija', '+393401234567', 'marco.rossi@yahoo.com', '$2y$10$4ENKCjrM4TubdrgoaXmXuOWOIAD5Fe33TXxONaCECk0N.fz4hu57q', 'user'),
(20, 'Jovan', 'Petrović', 'Svetog Petra Cetinjskog 147', 81000, 'Podgorica', 'CrnaGora', '+38267123456', 'jovan.petrovic@hotmail.com', '$2y$10$McWr2o6UfLeNC7mB5MAL2uaMfu4VRNrjn5Hpf6DJEfoLb6y20MJPa', 'user'),
(21, 'Ivan', 'Petrović', 'Ulica Franje Tuđmana 10', 31000, 'Osijek', 'Hrvatska', '+385987654321', 'ivan.petrovic@email.com', '$2y$10$.qaMFPOQFxvqY4iv6fKf8Ojkm5ALHex0FC755QeDTF/DGg1KlIta.', 'user'),
(22, 'Jelena', 'Stojanović', 'Bulevar Despota Stefana 17', 11000, 'Beograd', 'Srbija', '+381623456789', 'jelena.stojanovic@email.com', '$2y$10$bBL30XjnM9H9XpwJm8iXBODe5RRXTm8yiS9toasXMYMvRQbPPkW0y', 'user'),
(23, 'Mirza', 'Šarić', 'Zmaja od Bosne 22A', 71000, 'Sarajevo', 'BiH', '+38761123456', 'mirza.saric@email.com', '$2y$10$fza3ywhiZ34WZ9BgzjT9GOOg2/DgeNJtg8YBGoH83T68mggp1znEq', 'user'),
(24, 'Eszter', 'Nagy', 'Rákóczi tér 1', 1084, 'Budapest', 'Mađarska', '+36304567890', 'eszter.nagy@email.com', '$2y$10$UypSCK5RDE7PjCexkjOU7.T0oXIBgZOnTI30YKAhVZiC5nPag9jby', 'user'),
(25, 'Maja', 'Kovač', 'Kardeljeva ulica 17', 1000, 'Ljubljana', 'Slovenija', '+38640987654', 'maja.kovac@email.com', '$2y$10$o1s8qKn8JKgcwzH5RmJZnOXIQtc6zKmIcXgen/MDVHuf.W36Ps/b6', 'user'),
(26, 'Paolo', 'Bianchi', 'Via Milano 13', 100, 'Roma', 'Italija', '+393456789012', 'paolo.bianchi@email.com', '$2y$10$6JzRd5nUkc5a2bCY04rOUO4.LGntdd40CTbrt9WeeoUYyubAIv9PK', 'user'),
(27, 'Nenad', 'Janković', 'Ul. 13. jul bb', 81000, 'Podgorica', 'CrnaGora', '+38268234567', 'nenad.jankovic@email.com', '$2y$10$8zW/jB09S0roiul0nHauQ.HXFMf7rutKmufeKPMiHGLNafaB1VtBi', 'user'),
(28, 'Luka', 'Vavra', 'Radićeva 13', 43500, 'Daruvar', 'Hrvatska', '+385981330950', 'lvavra@tvz.hr', '$2y$10$z4mHz5sO49ULoWlRRYcZTeBThdrJOzHkAknqNeggRB9RXLLepHRnC', 'admin'),
(29, 'Sara', 'Sarić', 'Gundulićeva 13', 43500, 'Daruvar', 'Hrvatska', '+385981334950', 'ssaric@podrska.hr', '$2y$10$fOpgYQG0XoSbAHLRfOo0ael.pi5ZCeI8JcmIU1rEuiUxwdM.lOQbm', 'support'),
(30, 'David', 'Vidić', 'Mažuranićeva 13', 43500, 'Daruvar', 'Hrvatska', '+385981337952', 'dvidic@koordinator.hr', '$2y$10$uRTDy.RUPNSPahGl7wi0puIOjjJDKIBwcv7MnA3yl27h.gUfuucPm', 'coordinator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
