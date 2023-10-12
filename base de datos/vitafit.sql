-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2023 a las 20:33:53
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vitafit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calculadora`
--

CREATE TABLE `calculadora` (
  `id_calculo` int(3) NOT NULL,
  `id_alimento` int(12) NOT NULL,
  `numero_identificacion` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id_recordatorio` int(2) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `numero_identificacion` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `id_ejercicio` int(3) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `video` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`id_ejercicio`, `nombre`, `descripcion`, `video`) VALUES
(1, 'flexiones_hindues', '4 series de 12 repeticiones ', ''),
(2, 'dominadas', '4 series de 12 reps', ''),
(3, 'planchas isometricas', '4 series 1 minuto resistencia ', ''),
(4, 'elevación de piernas', '4 series de 12 repeticiones', ''),
(5, 'bicicleta', '4 series 12 repeticiones por pierna ', ''),
(6, 'plancha lateral ', '4 series con 1 minuto de resistencia por lado ', ''),
(7, 'russian twist', '4 series de 24 repeticiones', ''),
(8, 'press de hombro', 'para una mayor eficacia es recomendable usar una mochila con libros que nos sirvan como mancuernas si no contamos con ellas\n4 series de 12 repeticiones ', ''),
(9, 'elevaciones unilater', 'para una mayor eficiencia usar pesas o en su defecto una mochila cargada de libros \r\n4 series de 12 repeticiones', ''),
(10, 'elevaciones frontale', 'se recomienda el uso de pesas o en su defecto una mochila cargada con libros para una mayor eficiencia \r\n4 series de 12 reps', ''),
(11, 'sentadilla ', '4 series de 20 repeticiones \r\n', ''),
(12, 'zancadas', '4 series de 15 repeticiones ', ''),
(13, 'sentadilla bulgara', '3 series de 15 repeticiones', ''),
(14, 'puente de cadera', '4 series de 15 repeticiones ', ''),
(15, 'abducción de cadera ', '3 series de 12 repeticiones por pierna ', ''),
(16, 'elevación de talones', '3 series de 20 repeticiones ', ''),
(17, 'flexiones', '4 series de 15 repeticiones ', ''),
(18, 'flexiones isometrica', '4 series de 7 repeticiones ', ''),
(19, 'flexión declinadas', '4 series de 12 repeticiones ', ''),
(20, 'flexión inclinada', '4 series de 12 repeticiones', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `macros`
--

CREATE TABLE `macros` (
  `id_alimentos` int(2) NOT NULL,
  `proteina` float NOT NULL,
  `grasas` float NOT NULL,
  `carbohidratos` float NOT NULL,
  `calorias` float NOT NULL,
  `fibra` float NOT NULL,
  `nombre_alimento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `macros`
--

INSERT INTO `macros` (`id_alimentos`, `proteina`, `grasas`, `carbohidratos`, `calorias`, `fibra`, `nombre_alimento`) VALUES
(1, 0.8, 0.2, 6.2, 35, 2.5, 'Berenjena'),
(2, 0.9, 0.2, 2.7, 18, 1.2, 'Tomate'),
(3, 0.6, 0.2, 7.1, 30, 0.4, 'Sandía'),
(4, 13, 0.1, 3.3, 25, 2.5, 'Repollo'),
(5, 0.7, 0.1, 16, 1.8, 1.6, 'Rábano'),
(6, 1.1, 0.3, 20.3, 89, 2.6, 'Plátano'),
(7, 0.5, 0.1, 11.7, 50, 1.4, 'Piña'),
(8, 0.9, 0.2, 2.9, 20, 1.7, 'Pimentón verde'),
(9, 1, 0.3, 3.9, 31, 2.1, 'Pimentón rojo'),
(10, 0.4, 0.1, 12.1, 57, 3.1, 'Pera'),
(11, 0.6, 0.2, 1.5, 12, 0.7, 'Pepino de ensalada'),
(12, 0.4, 0.1, 6.3, 25, 0.5, 'Pepino dulce'),
(13, 0.5, 0.3, 9.1, 43, 1.7, 'Papaya'),
(14, 2.1, 14.7, 1.8, 160, 7, 'Aguacate'),
(15, 1.4, 0.5, 4.3, 43, 5.3, 'Mora'),
(16, 0.9, 0.1, 9.3, 47, 2.4, 'Naranja'),
(17, 0.8, 0.2, 7.3, 34, 0.9, 'Melón'),
(18, 0.3, 0.2, 11.4, 52, 2.4, 'Manzana'),
(19, 1.1, 0.5, 11.7, 61, 3, 'Kiwi'),
(20, 1.4, 0.2, 1.1, 13, 1.1, 'Lechuga'),
(21, 0.7, 0.3, 5.7, 32, 2, 'Fresas'),
(22, 1.2, 0.7, 5.4, 52, 6.5, 'Frambuesas'),
(23, 2.9, 0.4, 1.4, 23, 2.2, 'Espinaca'),
(24, 0.9, 0.3, 8, 39, 1.5, 'Durazno'),
(25, 0.7, 0.3, 10, 46, 1.4, 'Ciruelas'),
(26, 1.6, 0.7, 14.7, 75, 3, 'Chirimoya'),
(27, 3.1, 0.3, 2.3, 22, 1, 'Champiñon'),
(30, 1, 0.3, 10.6, 50, 1.6, 'Cereza'),
(32, 1.1, 0.1, 7.6, 40, 1.4, 'Cebolla cruda'),
(33, 2.9, 0.3, 6.3, 53, 5.7, 'Alcachofa'),
(34, 0.7, 0.2, 1.4, 16, 1.6, 'Apio'),
(35, 6.4, 0.5, 31, 149, 2.1, 'Ajo'),
(36, 3.1, 0.1, 2.4, 28, 3, 'Brócoli'),
(37, 1.8, 0.5, 1.8, 23, 2.3, 'Coliflor'),
(38, 2.4, 0.2, 2.1, 22, 2, 'Espárragos'),
(39, 0.8, 0.3, 11.5, 53, 1.8, 'Mandarina'),
(40, 0.8, 0.4, 13.4, 60, 1.6, 'Mango'),
(41, 0.6, 0.1, 7, 32, 1.1, 'Pomelo'),
(42, 2.6, 0.7, 2.1, 25, 1.6, 'Rúcula'),
(43, 1.9, 0.3, 4.7, 35, 3.2, 'Arveja'),
(44, 0.8, 0.2, 5.2, 35, 3, 'Zanahoria'),
(45, 0.8, 0.5, 10, 57, 3.9, 'Uvas'),
(46, 0.4, 0, 8.7, 25, 0.4, 'Jugo de limon'),
(47, 0.7, 0.2, 10.4, 45, 0.4, 'Jugo de naranja'),
(48, 0.9, 0.1, 4.6, 28, 1.8, 'Nabos'),
(49, 1.5, 0.3, 12.4, 61, 1.8, 'Puerro'),
(50, 2.6, 1, 8.9, 68, 5.4, 'Guayaba'),
(51, 2.2, 0.7, 23.4, 9, 1.4, 'Maracuyá'),
(52, 27, 14, 0, 239, 0, 'Pollo'),
(53, 27, 14, 0, 242, 0, 'Carne de cerdo'),
(55, 26, 15, 0, 250, 0, 'Carne de res'),
(56, 23, 3.3, 0, 119, 0, 'Atún'),
(57, 18.1, 7.5, 0, 140, 0, 'Sardina'),
(58, 20, 13, 0, 208, 0, 'Salmon'),
(59, 37, 42, 1.4, 541, 0, 'Tocino'),
(60, 2.7, 0.3, 28, 130, 0.4, 'Arroz'),
(61, 21, 1.2, 63, 347, 16, 'Frijoles'),
(62, 19, 6, 61, 364, 17, 'Garbanzos'),
(63, 2, 0.1, 17, 77, 2.2, 'Papas cocidas'),
(64, 11, 8, 60, 335, 9, 'Avena'),
(65, 3.4, 1, 5, 42, 0, 'Leche');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_alimenticio`
--

CREATE TABLE `plan_alimenticio` (
  `id_plan` int(1) NOT NULL,
  `id_receta` int(15) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `numero_identificacion` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id_receta` int(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(15000) NOT NULL,
  `video` blob NOT NULL,
  `ingredientes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`id_receta`, `nombre`, `descripcion`, `video`, `ingredientes`) VALUES
(1, 'Espaguetis de calabacín con revuelto de setas', 'Elaboración\nPaso 1. Lava los calabacines, despúntalos y córtalos en espirales o en tiras finas y alargadas con una mandolina.\nPaso 2. Escalda las espirales de calabacín en agua hirviendo con sal durante 2 minutos.\nPaso 3. Escúrrelas y sumérgelas rápidamente en un bol con agua muy fría. Escúrrelas de nuevo y reserva.\nPaso 4. Pela la cebolla, córtala en tiras y sofríelas en una sartén amplia con 2 cucharadas de aceite 8-10 minutos a fuego suave.\nPaso 5. Añade las espirales de calabacín, salpimienta y saltea unos instantes. Agrega la mitad del cebollino picado.\nPaso 6. Trocea las setas más grandes, y pela y pica el diente de ajo. Calienta una sartén con el aceite restante y saltea las setas 2 minutos.\nPaso 7. Agrega el ajo picado, salpimienta y cocina un par de minutos más.\nPaso 8. Bate los huevos, sálalos y viértelos en la sartén con las setas. Deja que cuajen a fuego lento, removiendo.\nPaso 9. Con ayuda de un aro de emplatar, reparte los espaguetis de calabacín en los platos formando un nido. Espolvorea con el cebollino picado.\nEl truco: Añade un chorrito de leche evaporada, al batir los huevos, para que resulte aún más meloso.\n', '', 'Setas variadas\r\n4 huevos\r\n2 calabacines\r\n1 cebolla morada\r\n1 diente de ajo\r\n7 tallos de cebollino\r\nAlbahaca y orégano\r\n4 cucharadas de aceite de oliva\r\nPimienta y sal'),
(2, 'Ensalada César', 'Elaboración\r\nPaso 1. Pela el ajo y déjalo macerar en aceite de oliva durante 3 horas. \r\nPaso 2. Cuece el huevo en agua salada durante 12 minutos, refréscalo en agua fría y pélalo. \r\nPaso 3. Retira el ajo del aceite y añade el huevo troceado, el vinagre, el zumo de limón y una pizca de pimienta. Tritura todo hasta conseguir una salsa homogénea.\r\nPaso 4. Salpimienta la pechuga de pollo y hazla a la plancha. Córtala en tiras finas. \r\nPaso 5. Lava las espinacas y trocéalas. \r\nPaso 6. En una ensaladera pon las espinacas y el pollo. \r\nPaso 7. Añade queso cortado, aliña con la salsa preparada y sirve.', '', '125 gr de pechuga de pollo\r\n400 gr de espinacas tiernas\r\n75 gr de queso parmensano\r\n1 huevo\r\n1 diente de ajo\r\n3 cucharadas de zumo de limón\r\n3 cucharadas de vinagre\r\nAceite de oliva virgen extra\r\nSal\r\nPimienta negra'),
(3, 'Crema de zanahoria', 'Paso 1. Pela la cebolla y las zanahorias, y trocéalas. Rehoga la primera en la mantequilla 2 min. Añade la zanahoria, espolvorea con la harina, vierte el caldo, salpimenta y cuece 10 min.\r\nPaso 2. Pica los piñones y mézclalos con el queso. Forma los crujientes de queso fundiendo 4 cucharadas de la mezcla en una sartén. Haz 8 crujientes. Este paso es opcional, prescinde de él si no tienes ingredientes o si no te quieres complicar.\r\nPaso 3. Tritura la verdura, añade el zumo de las naranjas y la nata a la crema de zanahoria, ajusta de sal y remueve.\r\nPaso 4. Reparte la crema en 4 cuencos y sírvela decorada con los crujientes de queso y piñones.', '', 'Ingredientes  \r\n1/2 kg de zanahorias\r\n1 cebolla\r\n2 naranjas\r\n60 gramos de mantequilla\r\n1 cucharada de harina\r\n400 ml de caldo de pollo\r\n100 ml de nata líquida baja en grasas\r\n50 gramos de queso parmesano rallado\r\n20 gramos de piñones\r\nSal\r\nPimienta'),
(4, 'huevos revueltos con espárragos verdes y tiras', 'Elaboración \r\nPaso 1. Limpia los espárragos eliminando la parte más dura del tallo. Trocea los más grandes.\r\nPaso 2. Pela el ajo y pícalo.\r\nPaso 3. Calienta el aceite en una sartén y saltea el ajo y los espárragos de 2 a 4 minutos dependiendo del grosor.\r\nPaso 4. Casca los huevos en un cuenco, sálalos y bátelos.\r\nPaso 5. Añádelos a la sartén con los espárragos y, a fuego lento, remueve un minuto hasta que cuajen. Sirve el revuelto en platos y decora con tiras de jamón.', '', '4 huevos\r\n1 manojo de espárragos tiernos\r\n1 diente de ajo\r\n40 g de jamón de pato o de jamón Ibérico (opcional o sustituible por fiambre de pavo o jamón york)\r\n2 cucharadas de aceite de oliva\r\nFlores\r\nSal\r\nPimienta'),
(5, 'Ensalada de garbanzos con atún ', 'Elaboración\r\nPaso 1. Limpia la cebolleta y pícala.\r\nPaso 2. Lava los tomates y córtalos en gajos.\r\nPaso 3. Tuesta la mazorca entera en la plancha, dándole la vuelta a medida que se dore. Extrae los granos con la ayuda de un cuchillo.\r\nPaso 4. Enjuaga los garbanzos y mézclalos con el maíz, los tomates, la cebolla, los canónigos lavados y el atún escurrido.\r\nPaso 5. Tapa esta mezcla y déjala reposar en el frigorífico unos 30 minutos.\r\nPaso 6. Mientras, prepara una vinagreta: bate 1 cucharadita de mostaza con el vinagre, sal y pimienta. Añade el aceite y una pizca de orégano y vuelve a batir hasta que obtengas una salsa emulsionada.\r\nPaso 7. Sirve la ensalada de garbanzos aliñada con la vinagreta.\r\n', '', 'Ingredientes  \r\n300 gramos de garbanzos cocidos\r\n12 tomates cherry\r\n1 /2 cebolleta\r\n1 mazorca de maíz cocida\r\n1 bolsa de canónigos\r\n1 lata de atún en aceite de oliva\r\nOrégano\r\n4 cucharadas de aceite de oliva\r\nPimienta\r\n2 cucharadas de vinagre de Jerez\r\nMostaza\r\nSal\r\n'),
(6, 'Pollo salteado con verduras y almendras', 'Elaboración\r\n\r\nPaso 1. Limpia los espárragos y retira la base de su tallo.\r\nPaso 2. Pela las zanahorias, lávalas y parte en tiras.\r\nPaso 3. Despunta las judías y limpia los ajos. Trocea las verduras.\r\nPaso 4. Lava el calabacín y córtalo en rodajas.\r\nPaso 5. Pela la cebolla y pártela en plumas.\r\nPaso 6. Cuece las zanahorias en agua salada 5 min, las judías 7 min y los espárragos 3 min.\r\nPaso 7. Saltea el pollo cortado en tiras en el aceite, 3 min.\r\nPaso 8. Añade los ajos, la cebolla, las almendras y el calabacín y prosigue la cocción 2 min.\r\nPaso 9. Incorpora las zanahorias, las judías y los espárragos y cuécelos 2 min.\r\nPaso 10. Vierte el zumo de limón, 1 cucharada de salsa de soja y el tomillo lavado, saltea unos 2 min más y sírvelo.', '', 'Ingredientes \r\n400 gramos de pechuga de pollo\r\n100 gramos de zanahoria\r\n150 gramos de espárragos verdes\r\nEl zumo de 1/2 limón\r\n150 gramos de judías verdes\r\n1 calabacín\r\nSalsa de soja\r\n1 cebolla morada\r\n40 gramos de almendras\r\nUna ramita de tomillo\r\n2 cucharadas de aceite de oliva virgen\r\n100 gramos de ajos tiernos'),
(7, 'Rape con salsa de almendras', 'Elaboración\r\nPaso 1. Lava los tomates y ponlos en una bandeja de horno con la cabeza de ajo. Hornéalos a 200 °C durante 30 min. Retíralos y déjalos templar.\r\nPaso 2. Lava el rape y sécalo.\r\nPaso 3. Pela las almendras y reserva algunas.\r\nPaso 4. Lava el perejil, escúrrelo y pícalo fino.\r\nPaso 5. Trocea el pan y mézclalo con el vinagre.\r\nPaso 6. Luego, pela los tomates y los ajos. Tritura estos con la mezcla de pan, el resto de las almendras, 5 cucharadas de aceite, sal y pimienta.\r\nPaso 7. Dora el rape, por todos lados, en 1 cucharada de aceite, 10 min.\r\nPaso 8. Reparte en 4 platos la salsa de almendras, añade el pescado y sírvelo condimentado con sal, pimienta, perejil y las almendras reservadas picadas.', '', 'Ingredientes \r\n4 lomos de rape\r\n5 tomates\r\n1 cabeza de ajo\r\n2 rebanadas de pan tostado\r\nSal y pimienta\r\n100 g de almendras tostadas\r\nPerejil\r\nAceite de oliva virgen\r\n2 cucharadas de vinagre de vino tinto'),
(8, 'Milhojas de frutas', 'Elaboración\r\nPaso 1. Remoja la gelatina en agua fría, 10 min. Lleva a ebullición 300 ml de agua. Retira, añade 1 ramita de menta lavada, tapa y deja infusionar 5 min.\r\nPaso 2. Filtra, añade la gelatina escurrida y remueve hasta que se disuelva. Deja en la nevera 2 h, hasta que cuaje; remuévela un poco.\r\nPaso 3. Corta la fruta. Haz 4 rodajas grandes de sandía con un cortapastas y 4 más pequeñas de melón. Lava las ciruelas y quítales el hueso. Pela el kiwi. Corta ambos a rodajas finas.\r\nPaso 4. Monta el postre alternando la fruta con la gelatina de menta y sírvelo decorado con unas hojas de menta lavada.\r\n', '', 'Ingredientes (para 4 personas)\r\n8 ciruelas amarillas\r\n3 yogures desnatados\r\n4 cucharadas de miel\r\n40 g de nueces peladas\r\nUna ramita de romero\r\n200 g de sandía\r\n200 g de melón\r\n2 ciruelas rojas\r\n2 kiwis\r\n4 hojas de gelatina\r\n2 ramitas de menta\r\n'),
(9, 'Albóndigas de berenjena con tomate', 'Elaboración\r\nPaso 1. Pela las berenjenas y córtalas en dados. Ponlas en remojo en agua y un poco de sal durante media hora para quitarles el amargor. Luego, escurre y lava.\r\nPaso 2. Pela la cebolla y córtala en juliana. Saltea ambas con un chorrito de aceite, salpimienta, tapa y deja que cueza 10 minutos a fuego lento, hasta que las dos estén blandas, y tritúralas con la batidora.\r\nPaso 3. Agrega el huevo, la harina de avena y el pan rallado y mezcla bien. Deja reposar la masa dentro de la nevera tapada hasta que se enfríe.\r\nPaso 4. Lava los calabacines y, con ayuda de una mandolina, córtalos primero en láminas finas y, luego, a lo largo para hacer los espaguetis.\r\nPaso 5. Pon agua a hervir con una pizca de sal y la hoja de laurel, añade los espaguetis, cuécelos durante 3 minutos. Escurre y reserva.\r\nPaso 6. Toma porciones de la masa de berenjenas y forma las albóndigas. Ponlas sobre una bandeja de horno forrada con papel sulfurizado y píntalas con aceite; hornéalas a 180 °C por 15 minutos o hasta que estén doraditas.\r\nPaso 7. Sírvelas sobre una base de espaguetis de calabacín, regadas con la salsa de tomate caliente y decoradas con unas hojas de albahaca lavadas y secas. ¡Estarán increíbles!\r\n', '', 'Ingredientes (para 4 personas)\r\n600 gramos de berenjenas\r\n1 cebolla\r\n2 calabacines\r\n1 huevo\r\n40 gramos de harina de avena\r\n40 gramos de pan rallado\r\n300 gramos de salsa de tomate\r\nAlbahaca fresca\r\n1 hoja de laurel\r\nAceite de oliva\r\nPimienta y sal\r\n'),
(10, 'Berenjenas rellenas', 'Paso 1. Despunta las berenjenas, lávalas y pártelas por la mitad a lo largo. Vacíalas y cuécelas 5 min al vapor. Luego, ponlas bocabajo para que suelten el exceso de líquido.\r\nPaso 2. Lava toda la verdura y córtala en dados junto con la pulpa de la berenjena.\r\nPaso 3. Sofríe la cebolleta y los pimientos durante 10 minutos en una cazuela con 3 cucharadas de aceite.\r\nPaso 4. Agrega a continuación la berenjena y el calabacín y deja cocer por 10 minutos más, removiendo de vez en cuando. Sazona, incorpora la salsa de tomate, mezcla y retira del fuego.\r\nPaso 5. Precalienta el horno a 200 °C. Rellena las medias berenjenas con las verduras y ponlas en una bandeja refractaria. \r\nPaso 6. Casca un huevo sobre cada una y espolvoréalas con el queso. Hornéalas hasta que el huevo se cuaje y sírvelas enseguida.', '', 'Ingredientes (para 4 personas)\r\n2 berenjenas\r\n1 pimiento rojo\r\n1 pimiento amarillo\r\n1 pimiento verde\r\n1 calabacín\r\n1 cebolleta\r\n100 ml de salsa de tomate\r\n4 huevos\r\n50 gramos de queso rallado\r\nAceite y sal\r\n'),
(11, 'Tostadas de salmón con guacamole ', 'PREPARACIÓN\r\nPaso 1. Lavar y cortar el tomate en forma de dados. Reservar. \r\nPaso 2. Pelar y picar la cebolleta. Trocear parte de una guindilla y cortar también en rodajas. \r\nPaso 3. Retirar el hueso del aguacate, extraer la pulpa y exprimir el zumo de una lima. Machacar el aguacate y aliñar bien con aceite y sal. Incorporar el tomate, la cebolleta, la guindilla y la albahaca.\r\nPaso 4. Pelar la cebolla morada y cortar en juliana. Aliñar la cebolla con aceite de oliva y sal, y reservar. \r\nPaso 5. Tostar las rebanadas de pan en el horno. \r\nPaso 6. Untar las tostadas con bastante guacamole, agregar las lonchas de salmón y espolvorear con pimienta. \r\nPaso 7. Terminar de decorar la tostada con la cebolla morada aliñada, las huevas de salmón y un poco de aceite de oliva. \r\n', '', 'INGREDIENTES (4 personas) \r\n4 rebanadas de pan casero\r\n350 g de salmón ahumado en lonchas finas\r\n2 cebollas moradas\r\n50 g de rúcula\r\n2 aguacates pequeños\r\n1 tomate maduro\r\n1 guindilla\r\n1 cebolleta\r\nHuevas de salmón\r\nHojas de albahaca\r\n1 lima\r\nAceite de oliva, sal y pimienta\r\n'),
(12, 'Salteado de verduras con avena ', '\r\n\r\nPREPARACIÓN\r\nPaso 1. Para la vinagreta, poner en remojo los tomates secos al menos 4 horas antes. Luego, cuando ya haya pasado ese tiempo, escurre.\r\nPaso 2. Tostar ligeramente los anacardos en una sartén antiadherente. Agregar dos cucharadas de aceite, los tomates, vinagre, sal y remover unos minutos. Retirar y reservar. \r\nPaso 3. Lavar la avena, cocinar en agua salada el tiempo que marque el fabricante. Escurrir y saltear en una sartén amplia engrasada previamente con aceite de oliva virgen extra. Al final, agregar el tamari, remover y retirar. \r\nPaso 4. Lavar las hortalizas, pelar las cebolletas y cortar. Despuntar las judías. \r\nPaso 5. Agregar todo a una sartén y sofreír un par de minutos a fuego medio. Agregar el resto de hortalizas. Cubrir medio dedo de agua y sazonar. \r\nPaso 6. Cocinar a fuego medio durante un par de minutos hasta que se haya absorbido el agua. \r\nPaso 7. Servir el salteado de hortalizas con la avena y aliñar con la vinagreta de tomates realizada al inicio. \r\n', '', 'INGREDIENTES (4 personas)\r\n100 g de tirabeques\r\n150 g de judía verde fina\r\n150 g de guisantes baby con vaina\r\n1 manojo de cebolletas\r\n150 de avena en grano\r\n2 cucharadas de tamari\r\naceite de oliva virgen extra\r\nsal\r\nPara la vinagreta: \r\n30 g de tomates cereza secos\r\n50 g de anacardos\r\n100 ml de aceite de oliva\r\nvirgen extra\r\n50 ml de vinagre de manzana\r\nuna pizca de sal\r\n'),
(13, 'Ramen vegano', 'PREPARACIÓN\r\nPaso 1. En una cazuela, incorporar un litro y medio de agua y llevar a ebullición.\r\nPaso 2. Mientras está hirviendo, añadir sal y el alga kombu.\r\nPaso 3. Picar la cebolla y añadir también a la cazuela.\r\nPaso 4. Cuando vuelva a hervir, añadir las setas shiitake laminadas y el tofu troceado. \r\nPaso 5. Cocinar durante 20 minutos y añadir a continuación la pasta para ramen. Hay que tener en cuenta la pasta elegida. Mirar siempre antes las instrucciones, ya que puede variar el tiempo de cocción. \r\nPaso 6. Una vez todos los ingredientes estén cocinados, rallar el jengibre muy fino, colarlo y extraer el jugo. Luego añadir a la sopa. \r\nPaso 7. Servir en un bol y decorar con bastante cebollino. \r\n', '', 'INGREDIENTES (4 personas)\r\n1 cebolla\r\n10 setas shiitake\r\n200 g de tofu natural\r\n5 cm de alga kombu\r\n20 ramitas de cebollino\r\n3 cm de jengibre fresco\r\n200 g de pasta para ramen\r\nSal\r\n'),
(14, 'CREMA DE GARBANZOS', 'PREPARACIÓN\r\nPaso 1. Pelar la cebolla, rallar la zanahoria y trocear junto con la calabaza.\r\nPaso 2. Añadir todo a una olla, cubrir y sazonar. Cocer a fuego medio durante unos 40 minutos. Si hiciera falta, se puede añadir más agua. \r\nPaso 3. Precalentar el horno a 190º. Añadir papel de horno y los garbanzos. Tostar unos 10-12 minutos, removiendo algunas veces. \r\nPaso 4. Lavar las acelgas, cocer unos 10 minutos en agua salada y escurrir. Refrescar con agua. \r\nPaso 5. Escurrir el resto de vegetales reservando el agua y triturar con el resto de los garbanzos.\r\nPaso 6. Añadir el agua reservada hasta obtener una masa homogénea, sin ser muy espesa. Rectificar de sal si fuera necesario. \r\nPaso 7. Servir con los garbanzos tostados, las acelgas, la guindilla cortada en rodaja y un chorro de aceite. \r\n. \r\n', '', 'INGREDIENTES(4 personas)\r\n500 g de garbanzos cocidos\r\n1 cebolla\r\n400 g de calabaza limpia\r\n2 zanahorias\r\n½ manojo de acelgas\r\n1 guindilla (opcional)\r\nAceite de oliva y sal\r\n'),
(15, ' Pudin de chía con pera horneada ', 'Paso 1. Mete en el horno las peras que irán en la base y en el topping. Ponlo a 180 °C unos 35 minutos con un poco de canela y una pizca de sal marina sin refinar.\r\nPaso 2. Batir la bebida vegetal con una de las peras, una cucharadita de canela y semillas de chía. \r\nPaso 3. Dejar que repose en el frigorífico toda la noche para que forme el pudin. \r\nPaso 4. Al día siguiente, en el recipiente que se haya elegido, ve haciendo las capas. Coloca primero la pera horneada, luego un poco de chía, el topping, más chía y la última capa de topping. \r\n', '', 'INGREDIENTES (2 personas)\r\nPara la base:\r\n2 peras\r\n4 cucharadas de semillas de chía\r\n¾ de taza de bebida vegetal\r\n1 cucharadita de canela\r\nSal marina sin refinar\r\nPara el topping: \r\n1 pera\r\nCanela\r\nSal marina sin refinar\r\nVirutas de coco sin azúcar\r\nGranola crudivegana casera o frutos secos\r\nNibs de cacao (opcional)\r\n'),
(16, 'Pancakes con frutos rojos ', 'Paso 1. Mezclar todos los ingredientes en un bol grande. Con la ayuda de un batidor, mezclar bien hasta tener una textura casi densa. \r\nPaso 2. Calentar en una sartén antiadherente un poco de aceite a fuego fuerte. \r\nPaso 3. Verter 5 cucharadas de masa en la sartén y extender de forma circular. Una vez dorada por ese lado, dar la vuelta y dorar por el otro lado. \r\nPaso 4. Una vez estén dorados los pancakes, dejar reposar hasta el momento de servir. \r\nPaso 5. Acompañar los pancakes de una bola de sorbete de helado de limón, mermelada de frutos del bosque y fruta fresca. \r\n \r\n\r\n', '', 'INGREDIENTES (para 6-8 raciones)\r\n200 g de harina de trigo sarraceno\r\n150 g de harina de teff\r\n300 ml de bebida de soja\r\n2 cucharadas de aceite de oliva virgen extra\r\n2 cucharadas de sirope de agave\r\n1 cucharada de levadura química sin gluten\r\nUna pizca de sal\r\nPara acompañar:\r\nSorbete helado de limón\r\nMermelada de frutos del bosque sin azúcar\r\nFrambuesas frescas\r\nArándanos frescos\r\n'),
(17, 'Ensalada de coco y uvas', 'Preparación:\r\nTrocea las hojas verdes que hayas seleccionado, añade en pequeños tacos los tomates frescos (sin piel y sin pepitas), el pepino y la zanahoria, y agrega las uvas cortadas en cuartos y sin pepitas.\r\nPara la salsa, bate la leche de coco con los tomates secos y el cebollino hasta que consigas una salsa homogénea y de un agradable color rosa.\r\nUna vez tengas la salsa, intégrala en la ensalada. Remuévela para que impregne bien el resto de ingredientes.\r\nPara finalizar, con la ensalada ya en el plato, echa por encima las nueces troceadas\r\n', '', 'Ingredientes para 4 personas: \r\n250 g de hojas verdes (puedes combinar varios tipos de lechugas y brotes)\r\n2 tomates frescos\r\n1 pepino\r\n1 zanahoria\r\n12 uvas partidas en cuartos y sin pepitas\r\n5 nueces peladas\r\nPara la salsa: \r\n1 lata de leche de coco pura, elaborada a partir de cocos frescos y ecológicos\r\n8 tomates secos rehidratados o en aceite\r\nUn puñado generoso de cebollino fresco\r\n'),
(18, 'Ensalada de arroz rojo con espinacas y naranjas', 'Preparación: \r\nPon el arroz en abundante agua fría con un poco de sal y un chorrito de aceite. Cuando hierva, baja la llama y deja cocer unos 40 minutos a fuego medio. Cuando esté cocido, escúrrelo y déjalo enfriar.\r\nRetira los tallos fibrosos de las espinacas. Lávalas y escúrrelas bien, y sécalas cuidadosamente con un trapo o papel de cocina.\r\nPela las naranjas retirándoles completamente la piel blanca y trocéalas en octavos.\r\nPuedes montar la ensalada con el arroz como base y encima la naranja y las espinacas, o bien hacer un lecho de naranjas y hojas con el arroz encima. Escurre el tofu marinado, desmenúzalo con los dedos y repártelo por encima. Espolvorea con las almendras.\r\n\r\n\r\n', '', 'Ingredientes para 4 personas: \r\n200 g de arroz rojo de grano largo\r\n150 g de espinacas tipo baby\r\n2 naranjas medianas\r\n100 g de tofu marinado\r\n40 g de almendras picadas\r\nAceite de oliva\r\nSal marina\r\nPara el aliño: \r\n3 cucharadas de aceite de oliva virgen extra\r\n1 cucharada de vinagre balsámico\r\nPimienta a las cinco bayas\r\nSal marina\r\n'),
(19, 'Patatas bravas de manzana', 'En un bol, empapa bien las manzanas con el aceite y la sal con ayuda de las manos.\r\nColoca estas \"patatas\" en las láminas del deshidratador y deshidrata durante 12 horas a 38 °C. A las 6 horas, dales la vuelta para asegurar un deshidratado homogéneo.\r\nCuando falte poco tiempo para que estén listas, introduce todos los ingredientes de la salsa brava en una batidora de vaso y bate hasta obtener una salsa de tomate suave.\r\nCuando las manzanas estén listas, sírvelas en un plato y aderézalas con la salsa brava.\r\nSalsa a tu gusto: Para hacerla menos espesa puedes rectificar añadiendo agua del remojo de los dátiles.\r\n\r\n', '', 'Ingredientes para 4 personas:\r\n6 manzanas golden, peladas y cortadas a cubitos\r\n2 cucharadas de aceite de oliva virgen extra\r\n1 cucharadita de sal marina\r\nPara la salsa:\r\n¼ de taza bien prensada de tomates secos, remojados en agua filtrada durante 8h\r\n2 hojas de laurel molidas\r\n¼ de taza de semillas de girasol, remojadas durante 8h y lavadas\r\n¼ de taza de dátiles medjool, remojados en agua durante 8h\r\n¼ de taza de agua del remojo de los dátiles\r\nChile molido al gusto\r\nPimienta negra en polvo\r\n\r\n'),
(20, 'Tatin provenzal de tomates y piñones ', '\r\nPreparación:\r\nSe limpian los tomates y con un cuchillo afilado se cortan en rodajas transversales finas.\r\nSe trabaja la masa de hojaldre con un rodillo hasta darle forma circular de grosor fino.\r\nSe coloca en una bandeja, se pincha con un tenedor y se disponen los tomates por encima.\r\nSe sala y se hornea a 200ºC durante unos 20 minutos.\r\nSe deja enfriar, se añade el romero (o unas hojas de rúcula) y la salsa elaborada batiendo todos los ingredientes con el aceite. ', '', 'Ingredientes para 4 personas: \r\n1 lámina de hojaldre\r\n400 g de tomates\r\nUna ramita de romero\r\nAceite de oliva para la bandeja\r\nSal marina\r\nPara la salsa:\r\n15 g de hojas de albahaca\r\n1 limón\r\n1 cucharada de piñones\r\n75 ml de aceite de oliva virgen\r\nSal marina\r\n'),
(21, 'Barquitos de calabacita', 'Preparación\r\nLávese las manos con agua y con jabón.\r\nPrecaliente el horno a 350 °F.\r\nCorte cada calabacita por la mitad a lo largo. Utilice una cuchara para raspar y sacar cuidadosamente el centro con semillas de la calabacita.\r\nColoque las mitades de la calabacita en un recipiente para hornear pequeño. Con una cuchara, vierta la salsa para pasta dentro de cada mitad. Cubra con queso mozzarella y queso parmesano.\r\nHornee de 25 a 30 minutos o hasta que la calabacita puede perforarse con un tenedor y el queso esté burbujeante y dorado. Sirva caliente.\r\nRefrigere las sobras en las siguientes 2 horas.\r\n', '', 'Ingredientes\r\n2 calabacitas medianas o 3 calabacitas pequeñas\r\n1/2 taza de salsa de tomate para pasta\r\n1/2 taza de queso mozzarella rallado\r\n2 cucharadas de queso parmesano\r\n'),
(22, 'Pozole con pollo', 'Preparación\r\nLávese las manos con agua y con jabón.\r\nEn un sartén grande, a fuego medio, sofría la cebolla en aceite, hasta que empiece a suavizarse, alrededor de 5 minutos. Agregue ajo y continue cocinando por 1 minuto.\r\nAgregue la salsa de chile, el caldo, comino, orégano y el maíz para pozole a la cebolla y deje que hierva. Revuelva. Reduzca la temperatura y deje que se cocine a fuego lento sin tapar por 10 minutos. Incorpore el pollo y caliéntelo bien, alrededor de 2 minutos.\r\nVierta en tazones poco profundos y agregue los condimentos que desee.\r\nRefrigere las sobras en las siguientes 2 horas.\r\n', '', ' Porciones: 6\r\nIngredientes\r\n1 cucharadita de aceite vegetal\r\n1 taza de cebolla picada\r\n2 dientes de ajo, picado finamente o 1/2 cucharadita de ajo en polvo\r\n1 lata (10 onzas) de salsa de chile rojo o 1 lata (8 onzas) de salsa de tomate + 2 a 4 cucharadas de chile en polvo\r\n3 tazas de caldo de pollo bajo en sodio\r\n1 cucharadita de comino\r\n1 cucharadita de orégano\r\n1 lata (15 onzas) de maíz para pozole, escurrido y enjuagado (1 3/4 taza)\r\n2 tazas de pollo cocido y desmenuzado\r\nCondimentos (opcional)\r\nRepollo desmenuzado, lechuga, rábano en rodajas, cebolla picada, jugo de limón, cilantro picado, aguacate en rodajas o picado\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(1) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`, `descripcion`) VALUES
(1, 'usuario', ''),
(2, 'administrador', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE `rutina` (
  `id_rutina` int(2) NOT NULL,
  `id_ejercicio` int(3) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `numero_identificacion` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `correo` varchar(100) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `segundo_nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `celular` bigint(15) NOT NULL,
  `tipo_documento` text NOT NULL,
  `numero_identificacion` bigint(15) NOT NULL,
  `edad` int(2) NOT NULL,
  `estatura` int(3) NOT NULL,
  `peso` int(3) NOT NULL,
  `sexo` text NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `id_rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`correo`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `celular`, `tipo_documento`, `numero_identificacion`, `edad`, `estatura`, `peso`, `sexo`, `contraseña`, `id_rol`) VALUES
('benitez@gmail.com', 'Juan', 'José', 'Benitez', 'Lopera', 3006906760, 'TI', 1011397031, 16, 175, 65, 'M', '2614ba8e9cd194b7aacea8bc4c1f2373', 2),
('wifijs30@gmail.com', 'ivan', 'dario', 'santa', 'mejia', 3045353311, 'TI', 1020410474, 17, 175, 68, 'M', 'e657b927752e1432c80919fd764dd373', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calculadora`
--
ALTER TABLE `calculadora`
  ADD PRIMARY KEY (`id_calculo`),
  ADD KEY `id_alimento` (`id_alimento`),
  ADD KEY `numero_identificacion` (`numero_identificacion`);

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id_recordatorio`),
  ADD KEY `numero_identificacion` (`numero_identificacion`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`id_ejercicio`);

--
-- Indices de la tabla `macros`
--
ALTER TABLE `macros`
  ADD PRIMARY KEY (`id_alimentos`);

--
-- Indices de la tabla `plan_alimenticio`
--
ALTER TABLE `plan_alimenticio`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `id_receta` (`id_receta`),
  ADD KEY `numero_identificacion` (`numero_identificacion`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id_receta`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD PRIMARY KEY (`id_rutina`),
  ADD UNIQUE KEY `id_ejercicio` (`id_ejercicio`),
  ADD KEY `numero_identificacion` (`numero_identificacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`numero_identificacion`),
  ADD UNIQUE KEY `correo_2` (`correo`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calculadora`
--
ALTER TABLE `calculadora`
  MODIFY `id_calculo` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id_recordatorio` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `id_ejercicio` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `macros`
--
ALTER TABLE `macros`
  MODIFY `id_alimentos` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `plan_alimenticio`
--
ALTER TABLE `plan_alimenticio`
  MODIFY `id_plan` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `id_receta` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rutina`
--
ALTER TABLE `rutina`
  MODIFY `id_rutina` int(2) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calculadora`
--
ALTER TABLE `calculadora`
  ADD CONSTRAINT `calculadora_ibfk_1` FOREIGN KEY (`id_alimento`) REFERENCES `macros` (`id_alimentos`);

--
-- Filtros para la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD CONSTRAINT `calendario_ibfk_1` FOREIGN KEY (`numero_identificacion`) REFERENCES `usuario` (`numero_identificacion`);

--
-- Filtros para la tabla `plan_alimenticio`
--
ALTER TABLE `plan_alimenticio`
  ADD CONSTRAINT `plan_alimenticio_ibfk_1` FOREIGN KEY (`id_receta`) REFERENCES `receta` (`id_receta`),
  ADD CONSTRAINT `plan_alimenticio_ibfk_2` FOREIGN KEY (`numero_identificacion`) REFERENCES `usuario` (`numero_identificacion`);

--
-- Filtros para la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD CONSTRAINT `rutina_ibfk_1` FOREIGN KEY (`id_ejercicio`) REFERENCES `ejercicio` (`id_ejercicio`),
  ADD CONSTRAINT `rutina_ibfk_2` FOREIGN KEY (`numero_identificacion`) REFERENCES `usuario` (`numero_identificacion`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
