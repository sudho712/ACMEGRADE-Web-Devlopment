Subscription - Netflix , Youtube, Disney Hotstar
Ads,Promotion - Youtube,Disney Hotstar

Buy
Sell


E-Commerce - SAAS
------------------
MVP- Minimum Viable Product
USP - Unique Selling Point

Roles & Responsibilities

SuperAdmin  
    Develop & Maintain the Platform - MVP - Done
    Manage Users
    Onboaarding Vendor by verifying KYC
    Manage Payment Gateway
    Dashboard for Vendors
Seller/Vendor
    Authentication/KYC - MVP - DONE
        Signup - DONE
            UI
                username
                password
                confirm-password
                usertype
                submit
            API
                read username and password
                insert into user table
            DB
                create user table
                    userid - int AI
                    username - varchar(80)
                    password - varchar(100)
                    usertype - varchar(10)
                    created_date - timestamp default current_timestamp

        Login - DONE
    Manage Products - MVP
        Create Product table
            pid - int ai
            name - varchar(100)
            price - float
            details - text
            impath - varchar(200)
            owner - int
            created_date - timestamp default current_timestamp
        Add - Done
        View
        Edit
        Delete
    Manage Orders        
        View - MVP
        Edit
        Mark as Delivered
Buyer/Customer
    Authentication - MVP
    View Products - MVP
    Compare Products
    Manage Cart - MVP
    DB
        cart table
            
        Add - MVP
        View - MVP
        Edit
        Delete - MVP
    Place Order - Partial
        Payment Gateway
        COD  - MVP
    Cancel Order
    Track Order
    Review & Rating
    Return
Customer Care
Delivery Partner
Accountant

