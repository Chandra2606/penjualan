function hitung(){
    var harga=parseInt(document.brgmasuk.hrgbrg.value); 
    var jumlah=parseInt(document.brgmasuk.jml.value);
    var tothrg=harga*jumlah;
    
    document.brgmasuk.subtot.value=tothrg;
    }