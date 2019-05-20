CREATE TABLE `society6`.`order_line_items` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `productId` INT NOT NULL,
  `quantity` INT NOT NULL,
  `imageLink` VARCHAR(150) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  FOREIGN KEY (productId) REFERENCES product(id)
);
