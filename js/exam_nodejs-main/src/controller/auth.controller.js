const productModel = require("./../models/product.model")

exports.product=function(req,res){
    res.render("auth/addProduct");
}

exports.postProduct= function(req,res){
    const data = req.body;

       try {
       const u = new productModel(data);
       u.save();
    
       res.redirect("/")
       } catch (error) {
        return res.send(error)
    }
}
exports.deleteProduct = async (req, res) => {
    const productId = req.params.id;
    console.log(productId);
    try {
      const deletedProduct = await productModel.findByIdAndDelete(productId);
  
      if (!deletedProduct) {
        return res.send("Product not found");
      }
  
      res.send("Product deleted successfully");
    } catch (err) {
      console.log(err);
      res.status(500).send('Internal Server Error');
    }
};
