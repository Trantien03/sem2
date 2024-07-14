require("dotenv").config();

const express = require("express");
const app = express();
const port = 2210;

app.listen(port,function(){
    console.log("Sever in running ...")
})

app.set("view engine","ejs");
app.use(express.static("public"));
app.use(express.json());
app.use(express.urlencoded({extended:true}));
//Connect database

require("./src/db/connect");""



const web_route = require("./src/routes/web.route");
app.use("/",web_route);

const auth_route = require("./src/routes/auth.route");
app.use("/auth",auth_route);