

CREATE TABLE IF NOT EXISTS `grupos` (
`id` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `grupos`
--

INSERT INTO `grupos` (`id`, `grupo`) VALUES
(1, 'administradores'),
(3, 'invitados'),
(2, 'usuarios');

-- --------------------------------------------------------

--
-- Structure de la table `idiomas`
--

CREATE TABLE IF NOT EXISTS `idiomas` (
`id` int(11) NOT NULL,
  `frase` varchar(250) COLLATE utf8_bin NOT NULL,
  `idioma` varchar(10) COLLATE utf8_bin NOT NULL,
  `traduccion` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Contenu de la table `idiomas`
--

INSERT INTO `idiomas` (`id`, `frase`, `idioma`, `traduccion`) VALUES
(1, 'Inicio', '', ''),
(2, 'Parametros', '', ''),
(3, 'Manager', '', ''),
(4, 'Ayuda', '', ''),
(5, 'Desconectarse', '', ''),
(6, 'Bienes', '', ''),
(7, 'Agenda', '', ''),
(8, 'Maillist', '', ''),
(9, 'Mensajes', '', ''),
(10, 'Mis contactos', '', ''),
(11, 'Interesados', '', ''),
(12, 'Personal', '', ''),
(13, 'Mi datos', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
`id` int(11) NOT NULL,
  `pagina` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `paginas`
--

INSERT INTO `paginas` (`id`, `pagina`) VALUES
(4, 'config'),
(1, 'gestion');

-- --------------------------------------------------------

--
-- Structure de la table `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
`id` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL,
  `pagina` varchar(50) COLLATE utf8_bin NOT NULL,
  `permiso` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `permisos`
--

INSERT INTO `permisos` (`id`, `grupo`, `pagina`, `permiso`) VALUES
(1, 'administradores', 'config', 1111),
(2, 'administradores', 'gestion', 1111);

-- --------------------------------------------------------

--
-- Structure de la table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `grupo` varchar(50) COLLATE utf8_bin NOT NULL,
  `nombres` varchar(100) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `clave` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `usuarios`
--

INSERT INTO `usuarios` (`id`, `grupo`, `nombres`, `login`, `clave`) VALUES
(1, 'administradores', 'robinson coello ', 'demo', 'demo');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `grupos`
--
ALTER TABLE `grupos`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `grupo` (`grupo`);

--
-- Index pour la table `idiomas`
--
ALTER TABLE `idiomas`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `es` (`frase`), ADD UNIQUE KEY `frase` (`frase`,`idioma`);

--
-- Index pour la table `paginas`
--
ALTER TABLE `paginas`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `pagina` (`pagina`);

--
-- Index pour la table `permisos`
--
ALTER TABLE `permisos`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `grupos`
--
ALTER TABLE `grupos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `idiomas`
--
ALTER TABLE `idiomas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `paginas`
--
ALTER TABLE `paginas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `permisos`
--
ALTER TABLE `permisos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

