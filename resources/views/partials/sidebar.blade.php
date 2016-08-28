<aside class="col-lg-3">
          <section>
            <h3>Top 5 Level</h3>
            <table class="table table-condensed table-content table-striped">
              <tbody>
                @forelse ($topFive as $player)
                <tr>
                  <td style="width: 80%"><strong>{{ $pos++ }}.</strong> <a href="/character/view/{{ $player->name }}">{{ $player->name }}</a></td>
                  <td><span class="label label-info">Lvl. {{ $player->level }}</span></td>
                </tr>
                @empty
                <tr>
                  <td>We don't have any player. :(</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </section>
          <section>
            <h3>Information</h3>
            <table class="table table-condensed table-content table-striped">
              <tbody>
                <tr>
                  <td colspan="2"><strong>IP:</strong> {{ $_SERVER['SERVER_NAME'] }}</td>
                </tr>
                <tr>
                  <td><strong>Client:</strong></td>
                  <td>10.77</td>
                </tr>
                <tr>
                  <td><strong>Type:</strong></td>
                  <td>RPG/PVP</td>
                </tr>
                <tr>
                  <td colspan="2"><a href="http://static.otland.net/ipchanger.exe" class="btn btn-small btn-success btn-block"><i class="glyphicon glyphicon-download-alt"></i> Download IP Changer</a></td>
                </tr>
              </tbody>
            </table>
          </section>
          <section>
            <h3>Rates</h3>
            <table class="table table-condensed table-content table-striped">
            <tbody>
            <tr>
            <td><strong>Experience:</strong></td>
            <td><a href="expstages.php">average 5x</a></td>
            </tr>
            <tr>
            <td><strong>Magic:</strong></td>
            <td>3x</td>
            </tr>
            <tr>
            <td><strong>Skill:</strong></td>
            <td>3x</td>
            </tr>
            <tr>
            <td><strong>Loot:</strong></td>
            <td>2x</td>
            </tr>
            </tbody>
            </table>
          </section>
          <section>
            <h3>Server Status</h3>
            <table class="table table-condensed table-content table-striped">
            <tbody>
            <tr><td><a href="/online">{{ $online }} {{ ($online == 1) ? 'player' : 'players' }} online.</a></td></tr><tr><td><a href="casts.php">0 casts with 0 spectators.</a></td></tr><tr><td><strong>The next server save is in:</strong></td></tr><tr><td id="timeToServerSave">12 hours, 00 min and 00 sec.</td></tr></tbody>
            </table>
          </section>
        </aside>
