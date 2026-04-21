import React from "react";
import Layout from "@/Layouts/Layout"; 

const Home = ({ name }) => {
    return <div>Hey {name}, Home is where the heart is.</div>;
};

Home.layout = page => <Layout children={page} title="Home" />

export default Home;