const express = require("express");
const router = express.Router();
const controller = require("../controller/auth.controller");

router.get("/addProduct",controller.product);
router.post("/addProduct",controller.postProduct);
router.get("/product/delete/:id", controller.deleteProduct)

module.exports = router;
