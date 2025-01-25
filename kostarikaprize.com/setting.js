/*
 _  __   ___    ____    _____      _      ____    ___    ____      _
| |/ /  / _ \  / ___|  |_   _|    / \    |  _ \  |_ _|  / ___|    / \
| ' /  | | | | \___ \    | |     / _ \   | |_) |  | |  | |       / _ \
| . \  | |_| |  ___) |   | |    / ___ \  |  _ <   | |  | |___   / ___ \
|_|\_\  \___/  |____/    |_|   /_/   \_\ |_| \_\ |___|  \____| /_/   \_\

*/

// WIN TODAY
const ResultDate = '01-01-2025';
const DrawNumber  = '334';
const FirstWinner = 8539;
const SecondWinner = 3103;
const ThirdWinner = 3102;
const StartPrz = 6561;
const ConsoPrz = 9596;

//HISTORY RESULT / PAST RESULT
const dataPastResult = [
    { period: '334', date: '01-01-2024', winner: '8539' },
    { period: '333', date: '31-12-2023', winner: '9046' },
    { period: '332', date: '30-12-2023', winner: '1671' },
    { period: '331', date: '29-12-2023', winner: '5023' },
    { period: '330', date: '28-12-2023', winner: '3296' },
    { period: '329', date: '27-12-2023', winner: '6432' },
    { period: '328', date: '26-12-2023', winner: '9807' },
    { period: '327', date: '25-12-2023', winner: '7526' },
    { period: '326', date: '24-12-2023', winner: '6354' },
    { period: '325', date: '23-12-2023', winner: '0788' },
    { period: '324', date: '22-12-2023', winner: '3240' },
    { period: '323', date: '21-12-2023', winner: '9845' },
    { period: '322', date: '20-12-2023', winner: '5273' },
    { period: '321', date: '19-12-2023', winner: '2569' },
    { period: '320', date: '18-12-2023', winner: '3434' },
    { period: '319', date: '17-12-2023', winner: '1687' },
    { period: '318', date: '16-12-2023', winner: '1021' },
    { period: '317', date: '15-12-2023', winner: '2855' },
    { period: '316', date: '14-12-2023', winner: '9795' },
    { period: '315', date: '13-12-2023', winner: '5988' },
    { period: '314', date: '12-12-2023', winner: '7201' },
    { period: '313', date: '11-12-2023', winner: '6543' },
    { period: '312', date: '10-12-2023', winner: '2785' },
    { period: '311', date: '09-12-2023', winner: '3412' },
    { period: '310', date: '08-12-2023', winner: '9107' },
    { period: '309', date: '07-12-2023', winner: '7921' },
    { period: '308', date: '06-12-2023', winner: '6609' },
    { period: '307', date: '05-12-2023', winner: '6820' },
    { period: '306', date: '04-12-2023', winner: '5036' },
    { period: '305', date: '03-12-2023', winner: '7024' },
    { period: '304', date: '02-12-2023', winner: '9045' },
    { period: '303', date: '01-12-2023', winner: '6283' },
    { period: '302', date: '30-11-2023', winner: '7064' },
    { period: '301', date: '29-11-2023', winner: '2117' },
    { period: '300', date: '28-11-2023', winner: '8802' },
    { period: '299', date: '27-11-2023', winner: '2478' },
    { period: '298', date: '26-11-2023', winner: '6093' },
    { period: '297', date: '25-11-2023', winner: '9640' },
    { period: '296', date: '24-11-2023', winner: '5311' },
    { period: '295', date: '23-11-2023', winner: '7592' },
    { period: '294', date: '22-11-2023', winner: '8014' },
    { period: '293', date: '21-11-2023', winner: '6423' },
    { period: '292', date: '20-11-2023', winner: '9570' },
    { period: '291', date: '19-11-2023', winner: '1357' },
    { period: '290', date: '18-11-2023', winner: '7436' }
];



const WinnerStr = FirstWinner.toString();
const SecWinStr = SecondWinner.toString();
const ThrWinStr = ThirdWinner.toString();
const StartWinStr = StartPrz.toString();
const ConsoWinStr = ConsoPrz.toString();
