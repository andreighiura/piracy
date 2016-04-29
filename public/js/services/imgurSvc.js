angular.module('myApp.services')
    .constant('imgurOptions', {

        /**
         * @constant UPLOAD_URL
         * @type {String}
         */
        UPLOAD_URL: 'https://api.imgur.com/3/image',

        /**
         * @constant UPLOAD_METHOD
         * @type {String}
         */
        UPLOAD_METHOD: 'POST',

        /**
         * @constant API_KEY
         * @type {String}
         */
        API_KEY: 'Client-ID 6ac87b01bdaabd2'

    })
    .service('imgurSvc', function($http, imgurOptions, $window, $q) {



        /**
         * @method upload
         * @param imageData {String}
         * @return {$q.promise}
         */
        this.upload = function(imageData) {
            //console.log(imageData);
            if (!imgurOptions.API_KEY) {

                // Ensure the `API_KEY` has been defined.
                throw "ngImgur: You must define your API key in `imgurOptions.API_KEY`.";

            }

            /**
             * @method send
             * @param imageData {Object}
             * @return {$q.promise}
             */
            // Begin reading the file as Base64.
          
                defera = $q.defer();
            //console.log(imageData)
            /**
             * @method onload
             * @return {void}
             */


            // Strip the image type from the base64 data.
           
            var base64Data = imageData.split(',')[1],
                reader = new FileReader(),
                headerModel = {
                    Authorization: imgurOptions.API_KEY,

                    'X-Requested-With': null

                },
                dataModel = {
                    image: base64Data
                };
           
            // Issue the request to upload the image data.
           
            $http({
                url: imgurOptions.UPLOAD_URL,
                method: imgurOptions.UPLOAD_METHOD,
                headers: headerModel,
                data: dataModel

            }).then(function(response) {
                //console.log(response.data.data.id);
                //console.log('xcz11xc')
                //defera.resolve('asdasdasd');
                defera.resolve(response.data.data.id);
                
                
                //console.log('xcz22xc')
            }, function() {
                console.log('rejected');
                defera.reject();
                
            });

            reader.readDataAsUrl;
            //console.log('xczxc')
return defera.promise;

        }
    });