export class Game {

    constructor(isWhite, movements) {
        this.isWhite = isWhite;
        this.movements = movements;
    }

    dummy() {
        var data = [];

        var tempMovements = [];
        tempMovements.push(new Movement("rnbqkbnr/pppppppp/8/8/8/N7/PPPPPPPP/R1BQKBNR b KQkq - 1 1",49));
        tempMovements.push(new Movement("rnbqkbnr/pppp1ppp/8/4p3/8/N7/PPPPPPPP/R1BQKBNR w KQkq - 0 2",48));
        tempMovements.push(new Movement("rnbqkbnr/pppp1ppp/8/1N2p3/8/8/PPPPPPPP/R1BQKBNR b KQkq - 1 2",40));
        tempMovements.push(new Movement("rnbqkbnr/ppp2ppp/8/1N1pp3/8/8/PPPPPPPP/R1BQKBNR w KQkq - 0 3",41));
        tempMovements.push(new Movement("rnbqkbnr/ppp2ppp/3N4/3pp3/8/8/PPPPPPPP/R1BQKBNR b KQkq - 1 3",20));
        tempMovements.push(new Movement("rnbqk1nr/ppp2ppp/3b4/3pp3/8/8/PPPPPPPP/R1BQKBNR w KQkq - 0 4",20));
        var tempGame = new Game(true, tempMovements);
        data.push(tempGame);

        var tempMovements = [];
        tempMovements.push(new Movement("rnbqkbnr/pppppppp/8/8/8/N7/PPPPPPPP/R1BQKBNR b KQkq - 1 1",49));
        tempMovements.push(new Movement("rnbqkbnr/pppp1ppp/8/4p3/8/N7/PPPPPPPP/R1BQKBNR w KQkq - 0 2",48));
        tempMovements.push(new Movement("rnbqkbnr/pppp1ppp/8/1N2p3/8/8/PPPPPPPP/R1BQKBNR b KQkq - 1 2",40));
        tempMovements.push(new Movement("rnbqkbnr/ppp2ppp/3p4/1N2p3/8/8/PPPPPPPP/R1BQKBNR w KQkq - 0 3",41));
        tempMovements.push(new Movement("rnbqkbnr/ppN2ppp/3p4/4p3/8/8/PPPPPPPP/R1BQKBNR b KQkq - 0 3",20));
        tempMovements.push(new Movement("rnb1kbnr/ppq2ppp/3p4/4p3/8/8/PPPPPPPP/R1BQKBNR w KQkq - 0 4",20));
        var tempGame = new Game(true, tempMovements);
        data.push(tempGame);

        return data;
    }

}

export class Movement {

    constructor(fen, score) {
        this.fen = fen;
        this.score = score;
        this.timesRepeated = 0;
    }

}
