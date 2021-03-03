
CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titel` text NOT NULL,
  `post` text NOT NULL,
  `author` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usrid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `posts`
--

INSERT INTO `posts` (`id`, `titel`, `post`, `author`, `date`, `usrid`) VALUES
(2, 'hej', 'test', 'aaa', '2019-03-21 01:04:31', 1),
(3, 'test', 'tessssssssssssssssssst', 'assa', '2019-03-21 23:15:40', 1),
(4, 'df', 'fd', 'a', '2019-03-22 00:43:09', 1),
(5, 'dsds', 'dsds', 'ds', '2019-03-22 21:47:08', 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullnamn` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `fullnamn`, `username`, `password`, `email`, `date`) VALUES
(1, 'hej', 'hej', '123', 'addada@hotmail.com', '2019-03-21 01:01:41');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
