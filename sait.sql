-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 25 2018 г., 16:33
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sait`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `showhide` enum('show','hide') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `body`, `showhide`, `created_at`, `updated_at`) VALUES
(1, 1, 'gfgfgf', 'show', '2018-10-25 12:20:47', '2018-10-25 12:20:47'),
(2, 1, '<p><img alt=\"heart\" src=\"http://localhost/media/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />Чудесный сайт!</p>\r\n', 'show', '2018-10-25 12:59:23', '2018-10-25 12:59:23');

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE `maintexts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Добро пожаловать на сайт', '		   <p class=\"lead\">Bootstrap uses <a href={{asset(\"http://gruntjs.com\")}}>Grunt</a> for its build system, with convenient methods for working with the framework. It\'s how we compile our code, run tests, and more.</p> <h2 id=\"grunt-installing\"><a class=\"anchorjs-link \" href={{asset(\"#grunt-installing\")}} aria-label=\"Anchor link for: grunt installing\" data-anchorjs-icon=\"\" style=\"font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; line-height: inherit; position: absolute; margin-left: -1em; padding-right: 0.5em;\"></a>Installing Grunt</h2> <p>To install Grunt, you must <strong>first <a href=\"https://nodejs.org/download/\">download and install node.js</a></strong> (which includes npm). npm stands for <a href=\"https://www.npmjs.com/\">node packaged modules</a> and is a way to manage development dependencies through node.js.</p> Then, from the command line: <ol> <li>Install <code>grunt-cli</code> globally with <code>npm install -g grunt-cli</code>.</li> <li>Navigate to the root <code>/bootstrap/</code> directory, then run <code>npm install</code>. npm will look at the <a href=\"https://github.com/twbs/bootstrap/blob/master/package.json\"><code>package.json</code></a> file and automatically install the necessary local dependencies listed there.</li> </ol> <p>When completed, you\'ll be able to run the various Grunt commands provided from the command line.</p> <h2 id=\"grunt-commands\">Available Grunt commands</h2> <h3 id=\"grunt-dist-just-compile-css-and-javascript\"><a class=\"anchorjs-link \" href=\"#grunt-dist-just-compile-css-and-javascript\" aria-label=\"Anchor link for: grunt dist just compile css and javascript\" data-anchorjs-icon=\"\" style=\"font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; line-height: inherit; position: absolute; margin-left: -1em; padding-right: 0.5em;\"></a><code>grunt dist</code> (Just compile CSS and JavaScript)</h3> <p>Regenerates the <code>/dist/</code> directory with compiled and minified CSS and JavaScript files. As a Bootstrap user, this is normally the command you want.</p> <h3 id=\"grunt-watch-watch\"><a class=\"anchorjs-link \" href=\"#grunt-watch-watch\" aria-label=\"Anchor link for: grunt watch watch\" data-anchorjs-icon=\"\" style=\"font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; line-height: inherit; position: absolute; margin-left: -1em; padding-right: 0.5em;\"></a><code>grunt watch</code> (Watch)</h3> <p>Watches the Less source files and automatically recompiles them to CSS whenever you save a change.</p> <h3 id=\"grunt-test-run-tests\"><a class=\"anchorjs-link \" href=\"#grunt-test-run-tests\" aria-label=\"Anchor link for: grunt test run tests\" data-anchorjs-icon=\"\" style=\"font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; line-height: inherit; position: absolute; margin-left: -1em; padding-right: 0.5em;\"></a><code>grunt test</code> (Run tests)</h3> <p>Runs <a href=\"http://jshint.com\">JSHint</a> and runs the <a href=\"http://qunitjs.com\">QUnit</a> tests headlessly in <a href=\"http://phantomjs.org\">PhantomJS</a>.</p> <h3 id=\"grunt-docs-build-test-the-docs-assets\"><a class=\"anchorjs-link \" href=\"#grunt-docs-build-test-the-docs-assets\" aria-label=\"Anchor link for: grunt docs build test the docs assets\" data-anchorjs-icon=\"\" style=\"font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; line-height: inherit; position: absolute; margin-left: -1em; padding-right: 0.5em;\"></a><code>grunt docs</code> (Build &amp; test the docs assets)</h3> <p>Builds and tests CSS, JavaScript, and other assets which are used when running the documentation locally via <code>bundle exec jekyll serve</code>.</p> <h3 id=\"grunt-build-absolutely-everything-and-run-tests\"><a class=\"anchorjs-link \" href=\"#grunt-build-absolutely-everything-and-run-tests\" aria-label=\"Anchor link for: grunt build absolutely everything and run tests\" data-anchorjs-icon=\"\" style=\"font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; line-height: inherit; position: absolute; margin-left: -1em; padding-right: 0.5em;\"></a><code>grunt</code> (Build absolutely everything and run tests)</h3> <p>Compiles and minifies CSS and JavaScript, builds the documentation website, runs the HTML5 validator against the docs, regenerates the Customizer assets, and more. Requires <a href=\"http://jekyllrb.com/docs/installation/\">Jekyll</a>. Usually only necessary if you\'re hacking on Bootstrap itself.</p> <h2 id=\"grunt-troubleshooting\"><a class=\"anchorjs-link \" href=\"#grunt-troubleshooting\" aria-label=\"Anchor link for: grunt troubleshooting\" data-anchorjs-icon=\"\" style=\"font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; line-height: inherit; position: absolute; margin-left: -1em; padding-right: 0.5em;\"></a>Troubleshooting</h2> <p>Should you encounter problems with installing dependencies or running Grunt commands, first delete the <code>/node_modules/</code> directory generated by npm. Then, rerun <code>npm install</code>.</p>  ', 'index', NULL, NULL, NULL),
(2, 'О нас', 'пираипипипаиап', 'about', NULL, NULL, NULL),
(3, 'Меню', 'аваывавыа', 'menu', NULL, NULL, NULL),
(4, 'Услуги', 'ваомиолвамолвмлволмв', 'servises', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_25_122151_maintexts', 2),
(4, '2018_10_25_145132_create_feedback_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Katrin', 'katrinantihovich@gmail.com', NULL, '$2y$10$w4XFM3thzFmV3guKxLvGU.2/RBlZr7yBg26Zxaeg/h9bXR3rYfwYG', 'H6j7BAVxhRpNYMayNqhoOY1vIQDxVBJdM170BX75SmXJFlqWnC05qrqzcCpI', '2018-10-25 07:44:46', '2018-10-25 07:44:46');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
