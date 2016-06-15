var randnum = function(min, max) {return (max-min)*Math.random()+min;};// Math.round(randnum(1,10));

// var tbl_interdit = ["1","2","3","4","5","6","7","8","9","0","!","@","#","$","^","&","%","*","(",")","+","=","-","[","]","/","{","}","|",":","<",">","?",",","."];
var tbl_mot_random = [<?php include 'listemot.txt'; ?>];
var tbl_img_pendu = ["image/pendu2.png","image/pendu3.png","image/pendu4.png","image/pendu5.png","image/pendu6.png"];
var tbl_mot_complet = new Array;
var mot_complet;
var tbl_a_trouver = new Array;
var win = 0;
var vie = 0;
var total = 0;

function newgame(){
    //Reset
    vie = 0;
    win = 0;
    total = 0;
    document.getElementById('penduimg').src = "image/pendu1.png";
    document.getElementById('motatrouver').innerHTML = "";
    document.getElementById('motecrit').innerHTML = "";
    tbl_mot_complet = new Array;
    tbl_a_trouver = new Array;
    //Création de la nouvelle partie
    var num = tbl_mot_random.length-1;
    var nummot = Math.round(randnum(0,num));
    var mot = tbl_mot_random[nummot];
    mot_complet = tbl_mot_random[nummot];
    tbl_mot_complet = mot.split("");
    for(var i=0; i<tbl_mot_complet.length; i++){
        tbl_a_trouver[i] = "_ ";
    }
    tbl_a_trouver[0] = tbl_mot_complet[0]+" ";
    total ++;
    var lettre = tbl_mot_complet[0];
    for(var i2=1; i2<tbl_mot_complet.length; i2++) {
        if( lettre == tbl_mot_complet[i2]){
            tbl_a_trouver[i2] = tbl_mot_complet[0];
            total ++;
        }
    }
    for(var i3=0;i3<tbl_a_trouver.length;i3++){
        document.getElementById('motatrouver').innerHTML += tbl_a_trouver[i3];
    }
}

function newgamemot(){
    //Reset
    vie = 0;
    win = 0;
    total = 0;
    document.getElementById('penduimg').src = "image/pendu1.png";
    mot_complet = document.getElementById('motecrit').value;
    mot_complet = mot_complet.toLowerCase();
    document.getElementById('motatrouver').innerHTML = "";
    document.getElementById('motecrit').value = "";
    tbl_mot_complet = new Array;
    tbl_a_trouver = new Array;
    //Nouvelle partie avec mot écrit.
    if(/[^a-z\-\/]/.test(mot_complet)) {
    }else{
        tbl_mot_complet = mot_complet.split("");
        for (var i = 0; i < tbl_mot_complet.length; i++) {
            tbl_a_trouver[i] = "_ ";
        }
        tbl_a_trouver[0] = tbl_mot_complet[0] + " ";
        total++;
        var lettre = tbl_mot_complet[0];
        for (var i2 = 1; i2 < tbl_mot_complet.length; i2++) {
            if (lettre == tbl_mot_complet[i2]) {
                tbl_a_trouver[i2] = tbl_mot_complet[0];
                total++;
            }
        }
        for (var i3 = 0; i3 < tbl_a_trouver.length; i3++) {
            document.getElementById('motatrouver').innerHTML += tbl_a_trouver[i3];
        }
        //Le mot existe t'il déjà ?
        var existe = 0;
        for (var i4 = 0; i4 < tbl_mot_random.length; i4++) {
            if (tbl_mot_random[i4] == mot_complet) {
                existe = 1;
            }
        }
        if (existe == 0) {
            //Ajout du mot dans le fichier texte.
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'addmot.php?mot=' + mot_complet, true);
            xhr.send(null);
        }
    }
}

function verif(){
    if(vie<5 && win==0) {
        var ecrit = document.getElementById("motecrit").value;
        document.getElementById("motecrit").value = "";
        var nblettre = ecrit.length;
        if(nblettre>1){
            if (ecrit == mot_complet) {
                win = 1;
            } else {
                document.getElementById('penduimg').src = tbl_img_pendu[vie];
                vie++;
            }
        }else{
            var vrai = 0;
            for(var i=1;i<tbl_mot_complet.length;i++){
                if(ecrit == tbl_mot_complet[i]){
                    tbl_a_trouver[i] = ecrit+" ";
                    total ++;
                    document.getElementById('motatrouver').innerHTML = "";
                    for(var i3=0;i3<tbl_a_trouver.length;i3++){
                        document.getElementById('motatrouver').innerHTML += tbl_a_trouver[i3];
                        vrai = 1;
                    }
                }
            }
            if(vrai == 0){
                document.getElementById('penduimg').src = tbl_img_pendu[vie];
                vie++;
            }
        }

    }
    if(total == tbl_mot_complet.length){
        win = 1;
    }
    if(win == 1){
        document.getElementById('motatrouver').innerHTML = "";
        for (var i = 0; i < tbl_mot_complet.length; i++) {
            document.getElementById('motatrouver').innerHTML += tbl_mot_complet[i];
        }
        if(vie == 0){
            document.getElementById('penduimg').src = "image/pendu-totalwin.png";
        }else{
            document.getElementById('penduimg').src = "image/pendu-win.png";
        }
    }
    if(vie>=5 && win==0){
        document.getElementById('motatrouver').innerHTML = "";
        for (var i = 0; i < tbl_mot_complet.length; i++) {
            document.getElementById('motatrouver').innerHTML += tbl_mot_complet[i];
        }
    }
}

