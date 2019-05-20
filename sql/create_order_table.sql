CREATE TABLE `society6`.`order` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `vendorId` INT NOT NULL,
  `customerId` INT NOT NULL,
  `orderItemIds` VARCHAR(200) NOT NULL,
  `status` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  FOREIGN KEY (vendorId) REFERENCES vendor(id),
  FOREIGN KEY (customerId) REFERENCES customer(id)
);
