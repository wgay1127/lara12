import React from "react";
import Layout from "@/Layouts/Layout"; 

const Admin = () => {
    return (
        <Layout>
            <div>
                <h1>Admin Dashboard</h1>
                <p>Welcome to the admin dashboard. Here you can manage users, view analytics, and perform administrative tasks.</p>
        <div id="usersList">

                </div>
                <div id="showUsersComponent"></div>
                <div id="app"></div>
            </div>
            <div>
            </div>
        </Layout>
    )
}

export default Admin;