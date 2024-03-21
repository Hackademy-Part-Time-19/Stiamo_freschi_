// Esempio di array di articoli
const articoli = [
    { titolo: 'Articolo 1', data: new Date('2024-03-20') },
    { titolo: 'Articolo 2', data: new Date('2024-03-18') },
    { titolo: 'Articolo 3', data: new Date('2024-03-19') },
    // Aggiungi altri articoli qui
];

// Ordina gli articoli dal più recente al meno recente
articoli.sort((a, b) => b.data - a.data);

// Stampare gli articoli ordinati
articoli.forEach(articolo => {
    console.log(articolo.titolo + ' - ' + articolo.data);
});