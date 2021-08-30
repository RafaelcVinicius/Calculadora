
// inserir valores 

function insert(num) {

    

    if(num == "+") {
        // Adição
       if(document.form.sup.value.indexOf("=") > -1) {
           document.form.sup.value = ''; 
       }
       if(document.form.display.value == '') {
           var sup = document.form.sup.value;
           var ult = sup.substring(0, sup.length - 2);

           document.form.sup.value = ult+"+ ";
       }
       var disup = document.form.sup.value+document.form.display.value;
       var soma = eval(disup);
       document.form.sup.value = soma+" + ";
       document.form.display.value = '';

    }else if(num == "-") {
        // subtração

       if(document.form.sup.value.indexOf("=") > -1) {
           document.form.sup.value = ''; 
       }
       if(document.form.display.value == '') {
           var sup = document.form.sup.value;
           var ult = sup.substring(0, sup.length - 2);

           document.form.sup.value = ult+"- ";
       }
       var disup = document.form.sup.value+document.form.display.value;
       var soma = eval(disup);
       document.form.sup.value = soma+" - ";
       document.form.display.value = '';

    }else if(num == "*") {
        // Multiplicação

        if(document.form.sup.value.indexOf("=") > -1) {
            document.form.sup.value = ''; 
        }
        if(document.form.display.value == '') {
            var sup = document.form.sup.value;
            var ult = sup.substring(0, sup.length - 2);

            document.form.sup.value = ult+"* ";
        }
        
        var disup = document.form.sup.value+document.form.display.value;
        var soma = eval(disup);
        document.form.sup.value = soma+" * ";
        document.form.display.value = '';

        
    }
    

    else if(num == "/") {
        // Divição

       if(document.form.sup.value.indexOf("=") > -1) {
           document.form.sup.value = ''; 
       }
       if(document.form.display.value == '') {
           var sup = document.form.sup.value;
           var ult = sup.substring(0, sup.length - 2);

           document.form.sup.value = ult+"/ ";
       }
       var disup = document.form.sup.value+document.form.display.value;
       var soma = eval(disup);
       document.form.sup.value = soma+" / ";
       document.form.display.value = '';

      
    }else if(num == "di") {
        // Porcentagem

       if(document.form.sup.value.indexOf("=") > -1) {
           document.form.sup.value = ''; 
       }
       var perc = document.form.display.value/100;
       var sup = document.form.sup.value;
       var ult = sup.substring(0, sup.length - 2);
       var valor = ult*perc;

       document.form.sup.value = document.form.sup.value+valor;

       document.form.display.value = '';



    }else{
       if(document.form.display.value == '0' ) {
        document.form.display.value = '';
        document.form.display.value = num;
        }else {
            document.form.display.value = document.form.display.value+num;
        }
    }

       
   }


   // somar ( resultado ) "="

   function igual(){
        if(document.form.sup.value.length > 0 && document.form.display.value.length > 0) {
            var conta = document.form.sup.value+document.form.display.value;
            var valor = eval(conta);
            document.form.display.value = valor;
            document.form.sup.value = conta+" = "; 
        }
   }
 
// Limpar deixar somente "0"

   function clean(){
       document.form.display.value = '0';
       document.form.sup.value = '';
   }

//limpar um valor por vez

   function backspace() {
       var dis = document.form.display.value;
       document.form.display.value = dis.substring(0, dis.length - 1);

       if(document.form.display.value.length == 0) {
        document.form.display.value = '0'
       }
   }