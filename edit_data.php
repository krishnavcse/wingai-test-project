<?php

require 'get_data.php';


echo '<!DOCTYPE html>
<html>
    <head>
        <title>Business Edit Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div style="margin:40px;">
            <div style="font-size:30px; margin-bottom: 20px;">
                Business Edit Page
            </div>
            <div>
                <form action="">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="business_name">Business Name</label>
                            <input id="business_name" class="form-control" type="text" placeholder="Enter Business Name" name="business_name" value="Wing AI">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="business_type">Business Type</label>
                            <select id="business_type" name="business_type" class="form-control">
                                <option value="">Select Business Type</option>
                                <option value="Real_State">Real State</option>
                                <option value="Medical_Services">Medical Services</option>
                                <option value="eCommerce">eCommerce</option>
                                <option value="Business_Consultant">Business Consultant</option>
                                <option value="Financial_Services" selected>Financial Services</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="region">Region</label>
                            <select id="region" name="region" class="form-control">
                                <option value="">Select Region</option>
                                <option value="India">India</option>
                                <option value="Philippiness">Philippiness</option>
                                <option value="Latin_America">Latin America</option>
                                <option value="United_States_of_America">United States of America</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="business_start_date">Business Start Date</label>
                            <input type="text" id="business_start_date" class="form-control" name="business_start_date" placeholder="Enter Business Start Date Eg: 2022-8-21" value="business_start_date"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="assistant_type">Assistant Type</label>
                            <select id="assistant_type" name="assistant_type" class="form-control">
                                <option value="">Select Assistant Type</option>
                                <option value="VA">VA</option>
                                <option value="Captain">Captain</option>
                                <option value="Senior_Captain">Senior Captain</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="plan_subscribed">Plan Subscribed</label>
                            <select id="plan_subscribed" name="plan_subscribed" class="form-control">
                                <option value="">Select Plan for Subscription</option>
                                <option value="199">199</option>
                                <option value="399">399</option>
                                <option value="799">799</option>
                                <option value="999">999</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            
        </script>
    </body>
</html>';

?>