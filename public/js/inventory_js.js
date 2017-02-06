/*
* @version 1.0
* @author Norman D. Claridad <normanclaridad@yahoo.com>,<normanclaridad@gmail.com>
* @copyright Copyright &copy; 2014, 
*/

/*
 | -----------------------------------------------------
 | TextBoxMask
 | sample parameter(this.value,this,'3,7','-'); 
 | -----------------------------------------------------
 */
function TextBoxMask(str,textbox,location,delim)
{
    var locs = location.split(',');

    for (var i = 0; i <= locs.length; i++)
    {
        for (var k = 0; k <= str.length; k++)
        {
            if (k == locs[i])
            {
                if (str.substring(k, k+1) != delim)
                {
                    str = str.substring(0,k) + delim + str.substring(k,str.length)
                }
            }
        }
    }
    textbox.value = str;
}
/*
 | -----------------------------------------------------
 | FORMAT STRING TO MONEY
 | SAMPLE : parameters format_to_money( this.val )
 | OUTPUT : 20,000.00
 | -----------------------------------------------------
 */
function format_to_money(_val) {
        var _value = _val.replace(/\,/g, '');
        //var _value  = _val;
        var _xplode = _value.split(".");
        var _final  = "";
        if (_xplode[1] == undefined || _xplode[1] == "") {

            if (_xplode[0].length > 0) {
                _final = _val.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ".00";
            } else {
                _final = "";
            }

        } else {

            var _value_re = parseFloat(_value).toFixed(2);

            _final = _value_re.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        }
        return _final;
    }
/*
 | --------------------------------
 | AGE 
 | --------------------------------
 */
function age( _selector )
{
    var today = new Date(), // today date object
        //birthday_val = $("#txtDate").val().split('/'), // input value
        birthday_val = $("#" + _selector ).val().split('/'), // input value
        birthday = new Date(birthday_val[2],birthday_val[0]-1,birthday_val[1]), // birthday date object
        // calculate age
        age = (today.getMonth() == birthday.getMonth() && today.getDate() > birthday.getDate()) ? 
            today.getFullYear() - birthday.getFullYear() : (today.getMonth() > birthday.getMonth()) ? 
                    today.getFullYear() - birthday.getFullYear() : 
                        today.getFullYear() - birthday.getFullYear()-1;

    //$("#txtAge").val(age);
    return age;
}
/*
 | ------------------------
 | VALIDATE EMAIL ADDRES
 | ------------------------
 */
function isEmailAddress(str) {
    var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return pattern.test(str);  // returns a boolean
}