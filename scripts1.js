function obliczStawke() {
    const stawkazboze = 5; // Przykładowa stawka za godzinę pracy graficznej
    const stawkadrewno = 10; // Przykładowa stawka za godzinę pracy zarządczej
    const stawkakamien = 15; // Przykładowa stawka za godzinę pracy programistycznej

    const zboze = parseFloat(
        document.getElementById("zboze").value
    );
    const drewno = parseFloat(
        document.getElementById("drewno").value
    );
    const kamien = parseFloat(
        document.getElementById("kamien").value
    );

    if (isNaN(zboze)) zboze = 0;
    if (isNaN(drewno)) drewno = 0;
    if (isNaN(kamien)) kamien = 0;

    const suma =
          zboze * stawkazboze +
          drewno * stawkadrewno +
          kamien * stawkakamien;

    document.getElementById("wynik").innerHTML = suma.toFixed(2);
}
