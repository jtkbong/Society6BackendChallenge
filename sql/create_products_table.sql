CREATE TABLE `society6`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `vendorId` INT NOT NULL,
  `productTypeId` INT NOT NULL,
  `creativeId` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  FOREIGN KEY (vendorId) REFERENCES vendor(id),
  FOREIGN KEY (productTypeId) REFERENCES product_type(id),
  FOREIGN KEY (creativeId) REFERENCES creative(id)
);
