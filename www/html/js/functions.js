// 'use strict';

$(function() {

    function post(name, val) {
        const action = 'finish.php';
        const method = 'POST';
        const data = this.$contactparam;
        let form = document.createElement('form');
        form.setAttribute('action', action);
        form.setAttribute('method', method); // POSTリクエストもしくはGETリクエストを書く。
        form.style.display = 'none'; // 画面に表示しないことを指定する
        document.body.appendChild(form);
        if (data !== undefined) {
            Object.keys(data).map((key)=>{
                let input = document.createElement('input');
                input.setAttribute('type', 'hidden');
                input.setAttribute('name', name); //「name」は適切な名前に変更する。
                input.setAttribute('value', val);
                form.appendChild(input);
            })
        }
        console.log(form)
        form.submit();
    }


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
            console.log(answer);
            if (records_num<(row+1)){
                var name = $('*[name=name]').val();
                // post("name2", name);
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
