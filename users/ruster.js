var select = document.querySelector('select');
//var imgchg = document.querySelector('img');
 var imgchg = document.getElementById('payimg');
select.addEventListener('change', background);

function background(){
var choice = select.value;
    if (choice == 'btc'){
        imgchg.style.color='yellow';
    }
    else if(choice =="0xe4E9C3BC8D84e65C531137f38964A951014d855a"){

        imgchg.src='mainetherium.jpeg';

    }
    else if(choice =="0xCac78e67958070AB27387406fE37345B86Bb8e93"){

        imgchg.src='mainshiba.jpeg';

    }
	else if(choice =="DEFyzBmswVrjNz1fw5BjBniVwSBnuU1xae"){

        imgchg.src='maindoge.jpeg';

    }
	else if(choice =="5kYNB2EQnY531T8LY5GsaFbPMmHyVSpaaBDgRJwDVDNd"){

        imgchg.src='mainsol.jpeg';

    }
}
