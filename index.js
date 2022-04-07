document.getElementById('button1').addEventListener('click',function() {
    document.querySelector('.bg-modal1').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click',function() {
    document.querySelector('.bg-modal1').style.display = 'none';
});

document.getElementById('button2').addEventListener('click',function() {
    document.querySelector('.bg-modal2').style.display = 'flex';
});

document.getElementById('button3').addEventListener('click',function() {
    document.querySelector('.bg-modal2').style.display = 'none';
    document.querySelector('.bg-modal3').style.display = 'flex';
});

document.getElementById('button4').addEventListener('click',function() {
    document.querySelector('.bg-modal3').style.display = 'none';
    document.querySelector('.bg-modal4').style.display = 'flex';
});

document.getElementById('button5').addEventListener('click',function() {
    document.querySelector('.bg-modal4').style.display = 'none';
    document.querySelector('.bg-modal5').style.display = 'flex';
});

document.getElementById('button6').addEventListener('click',function() {
    document.querySelector('.bg-modal5').style.display = 'none';
    document.querySelector('.bg-modal6').style.display = 'flex';
});

document.getElementById('button7').addEventListener('click',function() {
    document.querySelector('.bg-modal3').style.display = 'none';
    document.querySelector('.bg-modal2').style.display = 'flex';
});

document.getElementById('button8').addEventListener('click',function() {
    document.querySelector('.bg-modal4').style.display = 'none';
    document.querySelector('.bg-modal3').style.display = 'flex';
});

document.getElementById('button9').addEventListener('click',function() {
    document.querySelector('.bg-modal5').style.display = 'none';
    document.querySelector('.bg-modal4').style.display = 'flex';
});

document.getElementById('button10').addEventListener('click',function() {
    document.querySelector('.bg-modal6').style.display = 'none';
    document.querySelector('.bg-modal5').style.display = 'flex';
});

document.querySelector('.close2').addEventListener('click',function() {
    document.querySelector('.bg-modal6').style.display = 'none';
});