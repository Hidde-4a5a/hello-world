-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 apr 2017 om 23:38
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afdeling`
--

CREATE TABLE `afdeling` (
  `idAfdeling` int(11) NOT NULL,
  `AfdelingNaam` varchar(45) DEFAULT NULL,
  `Intern Telefoonnummer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `afdeling`
--

INSERT INTO `afdeling` (`idAfdeling`, `AfdelingNaam`, `Intern Telefoonnummer`) VALUES
(1, 'Engeneering', 250);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `incident`
--

CREATE TABLE `incident` (
  `idKlacht` int(11) NOT NULL,
  `Klacht` varchar(250) DEFAULT NULL,
  `Aaanmelddag` varchar(45) DEFAULT NULL,
  `MedewerkerNaam` varchar(45) DEFAULT NULL,
  `KorteOmschrijving` varchar(45) DEFAULT NULL,
  `MeerInfoOverMelding` varchar(250) DEFAULT NULL,
  `BetrekkingGebruikers` int(11) DEFAULT NULL,
  `Oplossing_idOplossing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `incident`
--

INSERT INTO `incident` (`idKlacht`, `Klacht`, `Aaanmelddag`, `MedewerkerNaam`, `KorteOmschrijving`, `MeerInfoOverMelding`, `BetrekkingGebruikers`, `Oplossing_idOplossing`) VALUES
(1, 'Pc werkt niet meer', 'Dinsdag', 'Hidde', 'Pc doet raar', 'Ik kan niet meer verder werken', 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `incident_has_medewerker`
--

CREATE TABLE `incident_has_medewerker` (
  `Incident_idKlacht` int(11) NOT NULL,
  `Medewerker_idMedewerker` int(11) NOT NULL,
  `Medewerker_Afdeling_idAfdeling` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerker`
--

CREATE TABLE `medewerker` (
  `idMedewerker` int(11) NOT NULL,
  `Achternaam` varchar(45) DEFAULT NULL,
  `Voorletter` varchar(45) DEFAULT NULL,
  `Geslacht` varchar(45) DEFAULT NULL,
  `Afdeling_idAfdeling` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `medewerker`
--

INSERT INTO `medewerker` (`idMedewerker`, `Achternaam`, `Voorletter`, `Geslacht`, `Afdeling_idAfdeling`) VALUES
(1, 'Westerhoudttie', 'H', 'M', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `oplossing`
--

CREATE TABLE `oplossing` (
  `idOplossing` int(11) NOT NULL,
  `Afhandeltijd` int(11) DEFAULT NULL,
  `Verantwoordelijke` varchar(45) DEFAULT NULL,
  `Oorzaak` varchar(45) DEFAULT NULL,
  `Oplossing` varchar(45) DEFAULT NULL,
  `Terugkopeling` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `oplossing`
--

INSERT INTO `oplossing` (`idOplossing`, `Afhandeltijd`, `Verantwoordelijke`, `Oorzaak`, `Oplossing`, `Terugkopeling`) VALUES
(1, 3, 'Beheerder', 'Pc werkt niet', 'Pc repareren', 'none');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `afdeling`
--
ALTER TABLE `afdeling`
  ADD PRIMARY KEY (`idAfdeling`);

--
-- Indexen voor tabel `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`idKlacht`),
  ADD KEY `fk_Incident_Oplossing1_idx` (`Oplossing_idOplossing`);

--
-- Indexen voor tabel `incident_has_medewerker`
--
ALTER TABLE `incident_has_medewerker`
  ADD PRIMARY KEY (`Incident_idKlacht`,`Medewerker_idMedewerker`,`Medewerker_Afdeling_idAfdeling`),
  ADD KEY `fk_Incident_has_Medewerker_Medewerker1_idx` (`Medewerker_idMedewerker`,`Medewerker_Afdeling_idAfdeling`),
  ADD KEY `fk_Incident_has_Medewerker_Incident1_idx` (`Incident_idKlacht`);

--
-- Indexen voor tabel `medewerker`
--
ALTER TABLE `medewerker`
  ADD PRIMARY KEY (`idMedewerker`,`Afdeling_idAfdeling`),
  ADD KEY `fk_Medewerker_Afdeling_idx` (`Afdeling_idAfdeling`);

--
-- Indexen voor tabel `oplossing`
--
ALTER TABLE `oplossing`
  ADD PRIMARY KEY (`idOplossing`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `afdeling`
--
ALTER TABLE `afdeling`
  MODIFY `idAfdeling` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `incident`
--
ALTER TABLE `incident`
  MODIFY `idKlacht` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `medewerker`
--
ALTER TABLE `medewerker`
  MODIFY `idMedewerker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `oplossing`
--
ALTER TABLE `oplossing`
  MODIFY `idOplossing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `fk_Incident_Oplossing1` FOREIGN KEY (`Oplossing_idOplossing`) REFERENCES `oplossing` (`idOplossing`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `incident_has_medewerker`
--
ALTER TABLE `incident_has_medewerker`
  ADD CONSTRAINT `fk_Incident_has_Medewerker_Incident1` FOREIGN KEY (`Incident_idKlacht`) REFERENCES `incident` (`idKlacht`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Incident_has_Medewerker_Medewerker1` FOREIGN KEY (`Medewerker_idMedewerker`,`Medewerker_Afdeling_idAfdeling`) REFERENCES `medewerker` (`idMedewerker`, `Afdeling_idAfdeling`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `medewerker`
--
ALTER TABLE `medewerker`
  ADD CONSTRAINT `fk_Medewerker_Afdeling` FOREIGN KEY (`Afdeling_idAfdeling`) REFERENCES `afdeling` (`idAfdeling`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
