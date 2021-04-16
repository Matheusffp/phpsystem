
    const valores = Array(10, 11, 16, 20, 54, 22, 8, 2);
    function returnValor(arr){
        let total = 0;
        for(let index = 1; index < valores.length; index++) {
            total += valores[index];

            if(total > 55) {
                total = total - valores[index];
            }
            if(total === 55){
                return total;
            }
        }
    
    }
    console.log(returnValor(valores));
    
    
   