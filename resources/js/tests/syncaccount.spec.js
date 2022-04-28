import { mount, flushPromises } from '@vue/test-utils'
import axios from 'axios'

import SyncAccount from '../components/SyncAccount.vue'

const mockRequest = JSON.parse('{"data":"[Event \\"Rated Blitz game\\"]\\n[Site \\"https://lichess.org/abhk80G7\\"]\\n[Date \\"2022.04.28\\"]\\n[White \\"DiegoAndriano\\"]\\n[Black \\"PatouCookeo\\"]\\n[Result \\"1-0\\"]\\n[UTCDate \\"2022.04.28\\"]\\n[UTCTime \\"20:57:59\\"]\\n[WhiteElo \\"1533\\"]\\n[BlackElo \\"1526\\"]\\n[WhiteRatingDiff \\"+6\\"]\\n[BlackRatingDiff \\"-5\\"]\\n[Variant \\"Standard\\"]\\n[TimeControl \\"180+0\\"]\\n[ECO \\"A00\\"]\\n[Termination \\"Normal\\"]\\n\\n1. d3 { [%eval 0.0] } 1... b6 { [%eval 0.19] } 2. Nf3 { [%eval 0.13] } 2... Bb7 { [%eval 0.21] } 3. g3 { [%eval 0.0] } 3... d5 { [%eval 0.24] } 4. Bg2 { [%eval 0.21] } 4... Nf6 { [%eval 0.37] } 5. O-O { [%eval 0.21] } 5... Nc6 { [%eval 0.87] } 6. Nfd2 { [%eval -0.56] } 6... e6 { [%eval -0.21] } 7. c4 { [%eval -0.85] } 7... dxc4 { [%eval 0.78] } 8. Nxc4 { [%eval 0.57] } 8... h5 { [%eval 1.03] } 9. Nc3 { [%eval 0.5] } 9... h4 { [%eval 1.42] } 10. a3 { [%eval 0.08] } 10... hxg3 { [%eval 0.03] } 11. fxg3 { [%eval -0.92] } 11... Bc5+ { [%eval 0.87] } 12. Kh1 { [%eval -2.81] } 12... Qd7 { [%eval -0.83] } 13. b4 { [%eval -3.07] } 13... Bd4 { [%eval -3.93] } 14. Qd2 { [%eval -6.41] } 14... O-O-O { [%eval -4.76] } 15. b5 { [%eval -9.28] } 15... Na5 { [%eval -5.39] } 16. Nxa5 { [%eval -8.36] } 16... Bxg2+ { [%eval -8.74] } 17. Kxg2 { [%eval -8.63] } 17... bxa5 { [%eval -3.9] } 18. a4 { [%eval -10.27] } 18... Nd5 { [%eval -7.75] } 19. Ra3 { [%eval -10.3] } 19... Nxc3 { [%eval -8.07] } 20. Rxc3 { [%eval -8.62] } 20... Qd5+ { [%eval -3.33] } 21. Rf3 { [%eval -6.15] } 21... Bxc3 { [%eval -1.34] } 22. Qxc3 { [%eval -1.0] } 22... e5 { [%eval -0.83] } 23. Qxa5 { [%eval -3.46] } 23... Kb7 { [%eval 0.75] } 24. e4 { [%eval -3.57] } 24... Qa2+ { [%eval -3.26] } 25. Rf2 { [%eval #-10] } 25... Qb3 { [%eval 2.82] } 26. Qa6+ { [%eval 2.87] } 26... Ka8 { [%eval 7.21] } 27. Qc6+ { [%eval 0.29] } 27... Kb8 { [%eval 0.0] } 28. a5 { [%eval -2.57] } 28... Rd6 { [%eval -2.48] } 29. Qc5 { [%eval -3.13] } 29... Qxd3 { [%eval -3.11] } 30. Rxf7 { [%eval -7.46] } 30... Qxe4+ { [%eval -7.37] } 31. Rf3 { [%eval -7.53] } 31... Rf8 { [%eval -7.2] } 32. Qc3 { [%eval #-5] } 32... Rxf3 { [%eval -8.08] } 33. Qxf3 { [%eval -8.07] } 33... Qxf3+ { [%eval -5.16] } 34. Kxf3 { [%eval -5.1] } 34... Rd5 { [%eval -5.27] } 35. Ke4 { [%eval -5.31] } 35... Rxb5 { [%eval -5.49] } 36. Bd2 { [%eval -6.68] } 36... Rb2 { [%eval -6.62] } 37. Bc3 { [%eval -6.85] } 37... Rxh2 { [%eval -7.0] } 38. Bxe5 { [%eval -7.08] } 38... Rh3 { [%eval -5.89] } 39. Kf4 { [%eval -7.01] } 39... Rh1 { [%eval -3.25] } 40. g4 { [%eval -6.54] } 40... Ra1 { [%eval 8.82] } 41. Bxa1 { [%eval 8.99] } 41... Kb7 { [%eval 9.37] } 42. Bxg7 { [%eval 10.72] } 42... Ka6 { [%eval 60.93] } 43. Bc3 { [%eval 66.72] } 43... Kb5 { [%eval 63.82] } 44. g5 { [%eval 71.03] } 44... c6 { [%eval #19] } 45. g6 { [%eval #11] } 45... c5 { [%eval #9] } 46. g7 { [%eval #10] } 46... c4 { [%eval #5] } 47. g8=Q { [%eval #4] } 47... Kc5 { [%eval #4] } 48. Qf8+ { [%eval #4] } 48... Kb5 { [%eval #3] } 49. Qf5+ { [%eval #4] } 49... Ka4 { [%eval #3] } 50. Qe4 { [%eval #4] } 50... Kb3 { [%eval #4] } 51. Bf6 { [%eval #5] } 51... c3 { [%eval #5] } 52. Qe3 { [%eval #6] } 52... Kc2 { [%eval #3] } 53. Qxc3+ { [%eval #2] } 53... Kd1 { [%eval #2] } 54. Ke3 { [%eval #1] } 54... a6 { [%eval #1] } 55. Qd2# 1-0\\n\\n\\n","status":200,"statusText":"OK","headers":{"content-type":"application/x-chess-pgn"},"config":{"transformRequest":{},"transformResponse":{},"timeout":0,"xsrfCookieName":"XSRF-TOKEN","xsrfHeaderName":"X-XSRF-TOKEN","maxContentLength":-1,"headers":{"Accept":"application/json, text/plain, */*"},"method":"get","url":"https://lichess.org/api/games/user/DiegoAndriano?max=1&analy…Type=ultraBullet,bullet,blitz,rapid,classical,correspondence\\""},"request":{}}')
const url = 'https://lichess.org/api/games/user/DiegoAndriano?max=1&analysed=true&evals=true&perfType=ultraBullet,bullet,blitz,rapid,classical,correspondence"'

jest.spyOn(axios, 'get').mockResolvedValue(mockRequest)

describe('SyncAccount.vue', () => {
    it('creates the get url api correctly', async () => {
        const wrapper = mount(SyncAccount)

        await wrapper.get('#submit').trigger('click')
        expect(axios.get).toHaveBeenCalledTimes(1)
        expect(axios.get).toHaveBeenCalledWith('https://lichess.org/api/games/user/DiegoAndriano?max=200&analysed=true&evals=true&perfType=ultraBullet,bullet,blitz,rapid,classical,correspondence"')
    })

    it('loads games on clicking go', () => {
        // assert event has been emitted
        // expect(wrapper.emitted('foo')).toBeTruthy()

        // assert event count
        // expect(wrapper.emitted('foo').length).toBe(2)

        // assert event payload
        // expect(wrapper.emitted('foo')[1]).toEqual([123])

    })

    it('disables button on pressing go', () => {

    })
})
