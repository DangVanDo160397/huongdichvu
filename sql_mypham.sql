-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2018 lúc 08:01 PM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sql_mypham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL,
  `description` text NOT NULL,
  `vote` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `description`, `vote`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'bộ vest đen đẹp nhất', 'Vest vốn là trang phục không thể thiếu khi mỗi màu thu về, ngoài những sắc màu trẻ, hiện đại và đầy cá tính được giới trẻ ưa chuộng thì những bộ vest màu đen tưởng chửng như cổ điển nhưng lại chưa bao giờ lỗi thời, đặc biệt nó còn là 1 trong những trang phục được nhiều doanh nghiệp lớn chọn làm đồng phục cho công ty nữa đấy. Đơn giản mà thanh lịch, đặc biệt màu đen không kén dáng, rất dễ để diện cho mọi lứa tuổi. Với vest the bộ có hai dạng phổ biến là dáng quần tây hoặc chân váy. Với nữ công sở trẻ thì nên chọn những bộ vest lửng ( kết hợp áo vest và chân váy).  Xem những mẫu vest bộ màu đen đẹp nhất xứ sở Hàn Quốc nổi danh với trang phục công sở này nhé! Chiếc áo vest điệu hơ với phần vạt hai lớp, kết hợp cùng sơ mi cổ bèo cũng khá thích hợp đấy chứ', 'Xứ sở Hàn Quốc nổi danh với những bộ đồ công sở, đặc biệt những bộ vest đẹp rất được lòng những cô nàng trẻ trung, thanh lịch chọn làm trang phục chuẩn đến văn phòng mỗi ngày.', '', NULL, 6, NULL, NULL),
(2, 'phẩm son Shiseido', 'Son bán lì kết cấu gel Shiseido VisionAiry Gel Lipstick sử dụng công thức đột phá và công nghệ Triple Gel của Shiseido mang đến những màu son sắc độ cao, đậm nét, ấn tượng với chất son mỏng nhẹ, mịn màng mà vẫn đảm bảo độ bám môi, cho hiệu ứng bán lì mượt mà và không trôi suốt 6 giờ. Chỉ với một lần lướt duy nhất, Shiseido VisionAiry Gel Lipstick đã cho bạn màu son bạn mong muốn cùng với cảm giác môi mềm mịn, ẩm mượt hơn.  Phấn má dạng nén Shiseido InnerGlow CheekPowder sử dụng công thức đột phá trong kết cấu bột phấn với công nghệ Cream Powder Matrix Technology độc quyền từ Shiseido cho hạt phấn nhỏ mịn như không khí nhưng vẫn có thể mang đến sắc màu tự nhiên, giúp da tỏa sáng tươi tắn từ bên trong đồng thời tạo không gian để làn da \"thở\" một cách dễ dàng. Phấn dạng nén, bám da, cho lớp trang điểm lì nhẹ nhàng, lâu trôi suốt 8 giờ. Shiseido InnerGlow CheekPowder có dải màu tươi trẻ với 10 màu phù hợp với mọi tông màu da và nhiều phong cách trang điểm khác nhau, có thể sử dụng như phấn tạo khối để gương mặt thêm ấn tượng.   Phấn nền dạng lỏng Shiseido Synchro Skin Glow Luminizing Fluid Foundation kế thừa hoàn hảo những ưu điểm của dòng phấn nền Synchro Skin nổi tiếng, được bổ sung thêm những công nghệ độc đáo. Phấn nền không những giúp lớp nền đồng điệu với tình trạng làn da để mang đến vẻ rạng rỡ hoàn hảo mà còn có khả năng duy trì độ ẩm mượt, khỏe khoắn cho làn da suốt ngày dài.', 'Son bán lì kết cấu gel Shiseido VisionAiry Gel Lipstick #219 Fire Cracker Phấn má dạng nén Shiseido InnerGlow CheekPowder #06 Alpen Glow Nước tẩy trang mắt và môi Shiseido Skincare Instant Eye & Lip Makeup Remover 30ml', '', NULL, 5, NULL, NULL),
(3, '', '', '', '', NULL, 2, NULL, NULL),
(4, '5 cách phối đồ giúp người lùn cải thiện chiều cao hữu hiệu', 'Kết bạn với items cạp cao Một trong những cách “ăn gian” chiều cao mà bất cứ nấm lùn nào cũng cần phải nằm lòng, đó là mix đồ cùng trang phục cạp cao. Công dụng tôn dáng một cách thần kỳ bằng cách đẩy xuất phát điểm của đôi chân lên cao khiến chúng xứng đáng trở thành items “đinh” trong tủ đồ của mọi cô gái. Càng ngắn càng tốt Tiêu chí này càng được phái nữ ưu tiên nhiều hơn trong thời tiết nóng “như cái lò”. Chiếc quần short ngắn hay chân váy trên đầu gối sẽ tạo hiệu ứng đôi chân dài miên man mà không cần phải nhờ đến sự trợ giúp của bất cứ phần mềm chỉnh sửa ảnh nào cả. Set đồ đơn sắc Tối giản hóa, giảm bớt chi tiết là xu hướng thời gian lên ngôi trong thời gian gần đây, đó chính là lý do Monochrome (một nhánh nhỏ của Minimalism) “càn quét” mạnh mẽ các sàn diễn mê hoặc mọi tín đồ thời trang bất chấp lứa tuổi. Vậy set đồ một màu có đặc điểm gì khiến chúng trở thành “vị cứu tinh” của những cô nàng có thân hình “một mẩu”? Nếu phong cách Color block chia tỷ lệ cơ thể thành những phần rõ rệt, thì một set đồ “tone sur tone” từ đầu đến chân mang lại hiệu ứng kéo dài thân hình, khiến người đối diện có ảo giác bạn cao hơn bình thường.', 'Những cách mặc đồ phù hợp dưới đây sẽ giúp những nàng có chiều cao khiêm tốn vẫn khiến người khác phải “ngước nhìn”.', '', NULL, NULL, NULL, NULL),
(6, '8 bước chăm sóc da ban đêm chị em nhất định phải biết', 'Bước đầu tiên bắt buộc trong quy trình chăm sóc da mỗi ngày chính là tẩy trang (dù bạn có trang điểm hay không đi nữa). Nếu chỉ dùng sữa rửa mặt thông thường sẽ không sạch và hiệu quả bằng sử dụng sản phẩm tẩy trang (không thể làm sạch lớp kem chống nắng và các lớp trang điểm). Vì thế kể cả khi bạn không trang điểm, chỉ dùng kem chống nắng trong ngày, tẩy trang vẫn rất cần thiết. Bước tẩy trang sẽ giảm thiểu tối đa tác hại của các chất tẩy rửa, chất hoạt động bề mặt và thành phần nhũ hóa của sản phẩm trên da bạn giúp các dưỡng chất của kem dưỡng hấp thụ tốt hơn. Ngoài ra, bạn nên chọn những loại tẩy trang không chứa cồn, hương liệu và chất bảo quản mạnh, vì đây là các thành phần dễ gây kích ứng và không tốt cho da. Trước tiên, hãy tạo bọt thật kỹ vì nó đóng vai trò tương tự như ion+ có khả năng hút sạch bã nhờn và bụi bẩn ion- để tăng hiệu quả làm sạch, đặc biệt giúp trung hoà chất tẩy rửa trong sữa rửa mặt với nước nhiều hơn để giảm bớt tính kiềm của chất tẩy rửa cũng như giảm lực ma sát trực tiếp của tay hoặc của máy rửa mặt lên da.  Tẩy da chết có tác dụng làm cho việc tái tạo da mới được thực hiện nhanh hơn chu kỳ bình thường, lấy đi 4 – 5 lớp tế bào da chết từ lớp sừng , giúp việc trao đổi chất diễn ra liên tục và các tế bào chết sẽ được thay thế bằng các tế bào mới để lộ ra lớp da non mới và mịn hơn, giúp hấp thụ hiệu quả tinh chất dưỡng da ở những bước kế tiếp. Đồng thời nó sẽ giúp làm sạch những mảng da dày sừng làm cho lỗ chân lông thông thoáng, giảm được nguy cơ mụn.', 'Dưới đây là 8 bước Chăm sóc da vào ban đêm (nhất là mùa đông) bao gồm 8 bước chính và 2 bước phụ. Trước tiên, chúng ta cần lưu ý 3 điều sau đây:  Nhận biết đúng loại da để lựa chọn đúng sản phẩm Rửa sạch tay trước khi chăm sóc da ', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Son', NULL, NULL),
(2, 'Kem dưỡng trắng da', NULL, NULL),
(3, 'Sữa rửa mặt', NULL, NULL),
(4, 'vest', NULL, NULL),
(5, 'dress', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_5_151923_create_roles_table', 1),
(2, '2018_10_8_000000_create_users_table', 1),
(3, '2018_10_9_100000_create_password_resets_table', 1),
(4, '2018_10_11_152511_create_categories_table', 2),
(5, '2018_10_11_152901_create_providers_table', 3),
(6, '2018_10_11_152930_create_products_table', 4),
(8, '2018_10_11_153214_create_articles_table', 5),
(9, '2018_10_11_154444_create_comments_table', 6),
(10, '2018_10_11_154706_create_questions_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `note` varchar(255) NOT NULL,
  `enable` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `provider_id` int(10) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `manufacturing_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `image`, `category_id`, `note`, `enable`, `description`, `provider_id`, `content`, `manufacturing_date`, `expiry_date`, `created_at`, `updated_at`) VALUES
(2, 'LD2036 Đầm cổ tròn đính đá', 630.00, 2, 'null', 5, 'null', '1', 'LD2037 Đầm được thiết kế đầy dịu dàng, nữ tính. Đầm trơn có dáng xòe rất hợp với những cô nàng điệu đà, yêu thích sự nhẹ nhàng, bay bổng. Đầm được thắt một phần eo đầy tinh tế, giúp các cô nàng luôn tươi trẻ và tràn đầy sức sống.', 2, 'null', '0000-00-00', '0000-00-00', NULL, NULL),
(3, 'Bộ kem dưỡng dành cho da nhạy cảm dễ kích ứng Sakura', 1.00, 5, 'http://www.maihan.vn/images/bo_kem_duong_cho_da_nhay_cam_de_kich_ung_a__1_.png', 2, 'null', '1', 'Bộ kem dưỡng dành cho da nhạy cảm dễ kích ứng Sakura mang đến cho bạn giải pháp chăm sóc và nuôi dưỡng làn da nhạy cảm theo cách dễ dàng và hiệu quả cao vượt trội.', 3, 'Làn da bị kích ứng dù chỉ có sự thay đổi nhỏ của môi trường\r\n\r\n \r\n\r\n Da mẩn đỏ, nổi mụn, khô ráp dù bạn chỉ dùng sữa rửa mặt hay kem dưỡng thông thường\r\n\r\n \r\n\r\n Làn da của bạn hầu như khó tính với tất cả các loại mỹ phẩm\r\n\r\n \r\n\r\n Bạn đang đau đầu tìm cách chiều lòng làn da đỏng đánh như con gái mới lớn này?', '2018-10-10', '2018-10-12', NULL, NULL),
(5, 'Son môi Shiseido Shimmering Rouge', 0.00, 0, '', 1, '', '3', 'Đôi môi căng mọng', 3, 'Cảm giác ẩm mượt trên mọi.', '0000-00-00', '0000-00-00', NULL, NULL),
(6, 'bộ áo vest nhung đen', 0.00, 0, '', 4, '', '2', 'bộ áo vest nhung đen', 1, '', '0000-00-00', '0000-00-00', NULL, NULL),
(7, 'Bộ Đôi Dưỡng Trắng Da Mặt White Doctors', 0.00, 0, '', 3, '', '1', 'Cuộc sống của tôi luôn luôn mang theo một nỗi buồn “làn da bánh mật”. Nhưng không vì thế mà buông xuôi, tôi tìm và thử rất nhiều cách làm trắng da mặt từ các nguyên liệu thiên nhiên, ngốn tiền vào các loại kem làm trắng da; đến spa, thẩm mỹ viện.', 3, 'Kết quả làn da ngăm đen được cải thiện nhưng là trắng bệch, không tự nhiên và dễ bắt nắng. Tôi vẫn kiên trì với công cuộc làm đẹp và chưa bao giờ có ý định đầu hàng.', '0000-00-00', '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `providers`
--

CREATE TABLE `providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `providers`
--

INSERT INTO `providers` (`id`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Adam_store', 'Khu đô thị, Tp. Thái Bình, Thái Bình', '094 981 33 33', NULL, NULL),
(2, 'Shop Váy Đẹp', ' 332, Nguyễn Văn Cừ, Quận Long Biên, Thành Phố Hà Nội, Ngọc Lâm, Long Biên, Hà Nội 100000', '097 737 72 79', NULL, NULL),
(3, 'Mỹ Phẩm Mai Hân', ' 591-593 Lê Hồng Phong, P.10, Q.10, TP HCM', '1900 2059 - 090 177 9997', NULL, NULL),
(4, 'đầm cột nơ dể thương cho tuổi teen - A80', 'Tòa nhà FPT Tân Thuận, Lô 29B-31B-33B, Đường Tân Thuận, KCX Tân Thuận, Phường Tân Thuận Đông, Quận 7, Tp.HCM.', '0908689234', NULL, NULL),
(5, 'Quần Nỉ Jogger Cá Tính - QNI_Sọc Trắng To', '01262882285', 'ân Thuận, KCX Tân Thuận, Phường Tân Thuận Đông, Quận 7, Tp.HCM', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `title`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Mặc gì trong ngày đầu tiên đến trường?', 1, NULL, NULL),
(8, 'Kết hợp bốt với những trang phục nào?', 2, NULL, NULL),
(9, 'Những mỹ phẩm nào có lội cho làm da khô và có nổi mụn ?', 3, NULL, NULL),
(10, 'Những bộ trang phục đẹp và thoáng mát cho những người mập ?', 4, NULL, NULL),
(11, 'Một số chách dưỡng ẩm và tốt cho da vào ban đêm ?', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'super', NULL, NULL),
(2, 'administrator', NULL, NULL),
(3, 'consultant_expert', NULL, NULL),
(4, 'member', NULL, NULL),
(5, 'manager', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `image`, `role_id`, `gender`, `phone`, `age`, `note`, `degree`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super_hoangquanghuy', 'hoangquanghuy@gmail.com', '123456', 'Thanh Nê-Kiến Xương-Thái Bình', NULL, 1, 'Nam', '0869824297', '30', 'Người có quyền hạn cao nhất', NULL, NULL, NULL, NULL),
(2, 'super_DangVanDo', 'dangvando@gmail.com', '123456', 'Thai-Binh', NULL, 1, 'Nam', '0869824297', '22', 'super', NULL, NULL, NULL, NULL),
(3, 'admin_NguyenTuanThanh', 'tuanthanh@gmail.com', '123456', 'TB', NULL, 2, 'Nam', '0869824297', '21', 'Admin', NULL, NULL, NULL, NULL),
(4, 'admin_NguyenBaHuynh', 'bahuynh@gmail.com', '123456', 'Nghe An', NULL, 2, 'Nam', '0869824297', '22', 'Admin', NULL, NULL, NULL, NULL),
(5, 'manager_VanManh', 'vanmanh@gmail.com', '123456', 'TB', NULL, 5, 'Nam', '0869824297', '22', 'Maneger', NULL, NULL, NULL, NULL),
(6, 'member_VanLam', 'vanlam@gmail.com', '123456', 'Thai Binh', NULL, 4, 'Nam', '0869824297', '22', 'Thành Viên', NULL, NULL, NULL, NULL),
(7, 'chuyengia_ThuThao', 'thuthao@gmail.com', '123456', 'Lang Son', NULL, 3, 'Nữ', '0869824297', '22', 'Chuyên gia tư vấn', 'Bằng cấp : giỏi', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_article_id_foreign` (`article_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_provider_id_foreign` (`provider_id`);

--
-- Chỉ mục cho bảng `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
