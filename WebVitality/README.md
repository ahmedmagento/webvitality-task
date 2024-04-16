# Ahmed WebVitality Test Module

This module is developed as a test module for WebVitality company. It demonstrates two ways of displaying the "Hello World" message:

1. **Template Rendering**: The message is displayed using a block and template. You can access it directly using the following URL:
   [http://localhost.magento2/test/index/display](http://localhost.magento2/test/index/display)

![template](https://github.com/ahmedmagento/webvitality-task/assets/129681058/3292cec4-9a5b-4a5f-82e2-06fb58aee55d)

   

3. **REST API**: The message is retrieved using a custom REST API endpoint. You can retrieve it by sending a GET request to the following endpoint:
   [http://localhost.magento2/rest/V1/helloworld](http://localhost.magento2/rest/V1/helloworld)


   ![restapi](https://github.com/ahmedmagento/webvitality-task/assets/129681058/3a633b6a-bff2-42ff-bef2-2cf42785e999)


### Note:
- This module is developed for demonstration purposes and may not include all production-level features such as proper authentication and error handling in the REST API implementation.
- Make sure your Magento 2 instance is properly configured and accessible before installing and testing the module.
