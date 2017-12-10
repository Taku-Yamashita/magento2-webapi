define(
    [
        'jquery',
        'mage/url'
    ],
    function ($j, url) {

        return {
            twiceNumber: function (intnum) {

                alert(intnum);
                var postFile = url.build('rest/V1/twice/number'); // 通信先PHP
                var postData = {
                    'number': {'num': intnum}
                };
                $j.ajax({
                    type: "POST",
                    accept: 'application/json',
                    url: postFile,  // URL
                    data: JSON.stringify(postData), // データ引数
                    dataType: 'json',
                    contentType: "application/json; charset=utf-8",
                    success: function (data) {
                        alert(data);
                    }
                });
            }
        }
    }
);
