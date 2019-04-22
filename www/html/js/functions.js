// 'use strict';

$(function() {
    $('#btn').click(function() {
        var row = $('*[name=current-row]').val();
        var check_num = $('*[name=radio'+row+']:checked').val();
        var records_num = $('*[name=records-num]').val();
        if (check_num === undefined) {
            alert("アンケートに回答してください")
        }　else {
            answer.push(check_num);
            row++;
            console.log(row+"枚目");
            // console.log(answer);
            if (records_num<(row+1)){
                var name = $('*[name=name]').val();
                var str_answer = answer.join(',');
                console.log(str_answer);
                const endpoint = "https://script.google.com/macros/s/AKfycbzSu9-V2AFfNHBu4zHe_L-bZH-CFpkZdZ3z6QMQzEDifqaTk6Cn/exec";
                $.ajax({
                    type: 'GET',
                    url: endpoint,
                    dataType: 'jsonp',
                    data: {
                        name: name,
                        answer: str_answer
                    },
                    success: out => {
                        console.log(out.message);
                    }
                });
                location.href = 'finish.php';
            } else {
                $("#form").load( "card-template.php", {
                    row: row
                }, function() {
                    $("#form-box").css({opacity: '0.0'}).animate({opacity: '1'}, 1000)
                });
            }
        }
    });
});

function confirmLabel() {
    window.open('label.php', '_blank', 'width=800,height=600');
}