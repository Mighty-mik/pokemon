alert('Catch them All!!')

let pokemon = document.getElementsByClassName("avatar")
console.log(pokemons.length);

for(let i = 0 ; i < (pokemons.length); i++){
    pokemons[i].addEvenListener('click',function(){

        let pok = pokemons
        console.log(pok.dataset.name);
    })
}
new Vue({
    el: "#app",
    data: {
      runGame: false,
      Pok: {
        vie: 100,
        victories: 0,
      },
      Pok: {
        vie: 100,
        victoire: 0,
      },
      Pkvie: 100,
      turns: []
    },
    methods: {
      startGame(gameStatus) {
        this.runGame = gameStatus;
        this.Pok.vie = 100;
        this.Pkvie = 100;
        this.turns = [];
      },
      gameAttacks() {
        this.PkAttaque(1, 25);
        
        this.PkAttacks(1, 25);
  
        this.checkWinner();
      },
      specialAttack() {
        this.PkAttacks(1, 25);
  
        this.PkAttacks(10, 20);
  
        this.checkWinner();
      },
      vie() {
        this.Pokvie(1, 20);
        
        this.PkAttacks(1, 20);
        
        this.checkWinner();
      },
      giveUp() {
        this.startGame(false);
        this.Pk.victories++;
      },
      PokAttaque(min, max) {
        const damage = Math.max(Math.floor(Math.random() * max) + 1, min);
        this.Pokvie -= damage;
  
        this.turns.unshift({
          isPok: true,
          text: `Pikachu attaque drakaufeu for ${damage}`
        });
      },
      Pokvie(min, max) {
        if (this.Pok.vie <= 90) {
          const vie = Math.max(Math.floor(Math.random() * max) + 1, min);
          this.Pok.vie += vie;
  
          this.turns.unshift({
            isPok: true,
            text: `Pikachu recovers for ${health}`
          });
        } else {
          this.turns.unshift({
          isPok: true,
          text: 'Pikachu peu guerrir seulment si tu a 90'
          });
        }
      },
      PkAttaque(min, max) {
        const damage = Math.max(Math.floor(Math.random() * max) + 1, min);
        this.player.health -= damage;
  
        this.turns.unshift({
          isPok: false,
          text: `drakaufeu attaque Pikachu for ${damage}`
        });
      },
      checkWinner() {
        if ($this->vie <= 0) {
          if (confirm('Survivor!')) {
            this.startGame(true);
            this.Pok.victories++;
          } else {
            this.startGame(false);
          }
        } else if (this.Pok.vie <= 0) {
          alert('ko!!');
          this.startGame(false);
          this.Pk.victories++;
        }
      }
    }
  })
  
  
  
  