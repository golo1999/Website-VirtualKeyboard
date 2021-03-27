$(function()
{
    var capslock_press=0, screen="", shift_press=false, id="", space_index, browser_width = $(window).width(), browser_height = $(window).height();

    if(browser_width>=1500) // vom modifica aceste setari doar daca latimea ferestrei browserului este de cel putin 1500px
    {
        $(".content").css({
            'width' : 0.58*browser_width,
            'height' : 0.57*browser_height
        });
        $(".key").css({
            'width' : 0.034*browser_width,
            'height' : 0.067*browser_height
        });
        $(".special_key").css({
            'width' : 0.0667*browser_width,
            'height' : 0.067*browser_height
        });
        $("#space").css({
            'width' : 0.2604*browser_width
        });
    }
    
    $(".key").click(function() // cand apasam pe un buton
    {
        if($(this).attr("class")=="key one_value") // daca butonul are doar o valoare (A, Y, Z etc)
        {
            id=$(this).attr("id"); // caracterul va fi majuscula
            if((capslock_press%2==0 && shift_press==false) || (capslock_press%2==1 && shift_press==true)) // daca nu avem nici caps, nici shift apasate sau daca le avem pe ambele apasate
                id=id.toLowerCase(); // transformam caracterul in minuscul
        }
        else if($(this).attr("class")=="key two_values") // daca butonul are doua valori (1, `, ; etc )
        {
            if(shift_press==true) // daca SHIFT este apasat, atunci luam primul cuvant din id
            {
                id=$(this).attr("id");
                space_index=id.indexOf(" ");
                id=id.substr(0,space_index);
            }
            else if(shift_press==false) // daca SHIFT nu este apasat, atunci luam al doilea cuvant din id
                id=$(this).attr("id").split(" ").pop();
        }
        screen+=id; // la final, adaugam caracterul in variabila screen, dupa care afisam noua valoare a lui screen pe ecran 
        $("#screen").val(screen);
    });
    $(".special_key").click(function() // daca butonul apasat este unul special (TAB, ENTER, SPACE etc)
    {
        if($(this).attr("id")=="backspace") // daca butonul apasat este BACKSPACE, stergem ultimul caracter din variabila screen si o afisam pe ecran
        {
            screen=screen.substr(0,screen.length-1);
            $("#screen").val(screen);
        }
        else if($(this).attr("id")=="capslock") // daca butonul apasat este CAPSLOCK, incrementam numarul de apasari pentru ca ledul sa fie aprins/stins
        {
            capslock_press++;
            if(capslock_press%2==1) // daca este apasat, ledul va avea culoarea crimson
                $("#capslock_checkbox").css({
                    'background-color' : 'crimson',
                    'transition' : '0.5s ease'
                });
            else $("#capslock_checkbox").css({ // daca nu este apasat, ledul are culoarea neagra
                'background-color' : 'black',
                'transition' : '0.5s ease'
            });
        }
        else if($(this).attr("id")=="shift1" || $(this).attr("id")=="shift2") // daca butonul apasat este SHIFT, inversam valoarea variabilei (true <-> false)
            shift_press=!shift_press;
        else if($(this).attr("id")=="space") // daca butonul apasat este SPACE, adaugam un spatiu
            screen+=" ";
        else if($(this).attr("id")=="tab") // daca butonul apasat este TAB, adaugam un 'tab'
            screen+="   ";
        else if($(this).attr("id")=="enter") // daca butonul apasat este ENTER, trimitem datele catre cealalta pagina
            $("#form").submit();
    });
});