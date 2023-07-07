-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 10, 2022 at 11:59 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vikas`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) UNSIGNED NOT NULL,
  `recipe_name` varchar(20000) NOT NULL DEFAULT '',
  `recipe_year` varchar(20) NOT NULL,
  `recipe_rating` varchar(20000) NOT NULL DEFAULT '',
  `recipe_bio` varchar(20000) DEFAULT NULL,
  `recipe_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `recipe_name`, `recipe_year`, `recipe_rating`, `recipe_bio`, `recipe_img`) VALUES
(1, 'Samosa Recipe', 'Vikas', '1 cup all purpose flour (maida)\r\n1/8 cup oil\r\n1/8 cup water\r\n4 boiled mashed potatoes\r\n1/2 cup green peas\r\nSome chopped cashew nuts (Optional)\r\nSome raisins (Optional)\r\n1/2 tsp garam masala\r\n1/4 tsp pepper\r\nSalt to taste\r\n1/4 tsp red chilli powder\r\n1/2 tsp dry mango powder (amchur)\r\n1/2 tsp jeera powder\r\nOil for frying', 'Mix flour, water, oil, salt and red chilli powder to make dough.\r\nIt should not be very soft. Leave aside for 15 minutes.\r\nHeat two tsp oil and add potatoes and peas. Cover on low flame for 5 minutes.\r\nAdd garam masala, pepper, amchur and jeera powder, mix well and again cover for 5-8 minutes.\r\nAdd cashew nuts and resins in the end and keep on flame for 3-5 minutes.\r\nKeep aside to cool.\r\nRoll small balls of the dough like chapati.\r\nCut each in two parts (like semi-circle), then take one semi circle and fold it in the shape of a cone. Use water while doing so.\r\nStuff the mixture of potatoes, peas and spices in that cone and seal it by taking a drop of water on your finger.\r\nHeat oil and fry.\r\nServe hot with tamarind chutney or green chutney.', 'assets/img/samosa.jpeg'),
(2, 'Jalebi', 'Vikas', '1/2 cup Maida/All Purpose Flour\r\n1 tablespoon Corn Flour (white corn starch) or Aararoot Powder\r\n1/4 teaspoon Baking Powder\r\nA pinch of Turmeric Powder (to get yellow color)\r\n1/4 cup Curd (yogurt)\r\n1/4 cup Water\r\nIngredients For Syrup:\r\n1/2 cup Sugar\r\n1/4 cup + 2 tablespoons Water\r\n1 teaspoon Lemon Juice\r\nA pinch of Cardamom Powder (elayachi)\r\n5-7 strands of Saffron (kesar), optional', '1. Sieve 1/2 cup maida in a medium bowl. Add 1-tablespoon corn flour (white corn starch), 1/4 teaspoon baking powder, a pinch of turmeric powder and 1/4 cup yogurt.\r\n2. Add water as needed (approx. 1/4 cup) and make a thick batter having consistency similar to vada batter (or little thicker than idli batter). Make sure that there are no lumps in batter.\r\n3. Cover the batter with a lid and keep it at room temperature for 24 hours to ferment. After 24 hours, remove the lid. The batter will have tiny bubbles on the surface and mild sour smell. Unlike Idli batter, its volume will not increase.\r\n4. Stir the batter well with a spoon.\r\n5. It should have sticky and dropping consistency. If the batter is too thin, jalebi will turn crispy but flat and if the batter is too thick, jalebi will turn soft and thick.\r\n6. Pour the batter into an empty ketchup bottle or jalebi maker bottle or in a thick ziplock bag.\r\n7. Now Add sugar, saffron strands, cardamom powder and water in a deep container and heat it over medium flame.\r\n8. Cook until the syrup reaches to 1-string consistency.\r\n9. When it reaches to 1-string consistency, add lemon juice. Mix well. Turn off the flame. Syrup is ready. [When you start making jalebis, heat the sugar syrup over low flame to keep it warm when the jalebis are dipped in it in next step.]\r\n9. Heat ghee/oil in a wide mouthed flat pan over medium flame to deep fry the jalebis. In this recipe, oil + 2 tablespoons ghee is used for deep frying. To check whether oil is ready for deep frying or not, add a drop of batter into hot oil and if it comes immediately on the surface without changing the color, oil is ready. When oil is ready, make round jalebis by squeezing the bottle (or ziplock bag) and moving it in a circular direction starting from the center towards the outside (or start from outside and move towards the center). Make 2-3 spirals of batter (or more or less depending on the size of a pan). If the jalebi doesn’t have perfect shape, don’t worry, as it requires some practice to make the perfect round shape. Its shape doesn’t affect its taste and texture.\r\n10. Flip 2-3 times (or as needed) using a tong to deep fry them evenly.\r\n11. Deep fry them until light golden and crispy.\r\n12. Remove it from the oil using a tong and immediately put it into the warm sugar syrup. Syrup should we warm or little hot, it shouldn’t be cold. Keep it in syrup for approx. 2-minutes; flip it once after a minute.\r\n13. Remove it from the syrup using a fork and transfer it to a plate. Jalebi is now ready for serving.', 'https://thumbs.dreamstime.com/b/jalebi-sweet-lovers-170145652.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) UNSIGNED NOT NULL,
  `review_recipe_id` int(11) UNSIGNED NOT NULL,
  `review_user_id` int(11) UNSIGNED NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_content` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_recipe_id`, `review_user_id`, `review_rating`, `review_content`) VALUES
(8, 1, 38, 5, 'This is Awesome recipe.\r\nThank u!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL DEFAULT '',
  `user_full_name` varchar(150) NOT NULL DEFAULT '',
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `user_password` varchar(255) NOT NULL DEFAULT '',
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_full_name`, `user_email`, `user_password`, `user_role`) VALUES
(38, 'admin', 'Admin 1', 'admin@admin.com', 'admin', 1),
(39, 'test', 'Test', 'test@test.com', 'test', 2),
(40, 'vikas', 'Vikas', 'vikask4590@gmail.com', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `users_foreign_key` (`review_user_id`),
  ADD KEY `recipes_foreign_key` (`review_recipe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `recipes_foreign_key` FOREIGN KEY (`review_recipe_id`) REFERENCES `recipes` (`recipe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_foreign_key` FOREIGN KEY (`review_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
