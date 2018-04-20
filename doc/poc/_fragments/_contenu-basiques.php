<article class="conteneur">

                <h1>Objets basiques <?php if($template==true) echo $template ?></h1>

                <h2>Liens</h2>
                <h3>Liens standards</h3>
                <p><a href="#">Lien standard</a></p>

                <h3>Liens avec <code>target="_blank"</code> + <code>.su-blank</code></h3>
                <p><a href="#" target="_blank" class="su-blank">Lien _blank</a></p>

                <h3>Liens neutres <code>.su-neutral-link</code></h3>
                <p><a href="#" class="su-neutral-link">Lien neutre</a></p>

                <h3>Liens voyants <code>.su-bright-link</code></h3>
                <p><a href="#" class="su-bright-link">Lien voyant</a></p>

                <hr/><!--------------------------------------------------------------------------------- -->

                <h2>Listes</h2>
                <h3>Liste base <code>ul</code> (ou <code>ul.su-not-list</code> si dans un bloc <code>.su-editorial ul</code>)</h3>
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>

                <h3>Liste à puces <code>ul.su-list</code> ou <code>.su-editorial ul</code></h3>
                <ul class="su-list">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>

                <h3>Liste à puces à 2 niveaux <code>ul.su-list / ul</code> ou <code>.su-editorial ul / ul</code></h3>
                <ul class="su-list">
                    <li>
                        Item 1
                        <ul class="su-list">
                            <li>Item n2 1</li>
                            <li>Item n2 2</li>
                            <li>Item n2 3</li>
                        </ul>
                    </li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>

                <h3>Liste numérotée <code>ol.su-list</code></h3>
                <ol class="su-list">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ol>

                <hr/><!--------------------------------------------------------------------------------- -->

                <h2>Tableaux</h2>
                <h3>Tableau de base</h3>
                <table summary="Résumé du tableau" class="su-margin-standard">
                	<caption>Légende du tableau</caption>
                	<thead>
                		<tr>
                			<th>En-tête de colonne 1</th>
                			<th>En-tête de colonne 2</th>
                		</tr>
                	</thead>
                	<tfoot>
                		<tr>
                			<th>Pied de colonne 1</th>
                			<th>Pied de colonne 2</th>
                		</tr>
                	</tfoot>
                	<tbody>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td colspan="2">Celulle fusionnée</td>
                		</tr>
                	</tbody>
                </table>

                <h3>Tableau designé avec <code>.su-table</code></h3>
                <table summary="Résumé du tableau" class="su-table su-margin-standard">
                	<caption>Légende du tableau</caption>
                	<thead>
                		<tr>
                			<th>En-tête de colonne 1</th>
                			<th>En-tête de colonne 2</th>
                		</tr>
                	</thead>
                	<tfoot>
                		<tr>
                			<th>Pied de colonne 1</th>
                			<th>Pied de colonne 2</th>
                		</tr>
                	</tfoot>
                	<tbody>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td colspan="2">Celulle fusionnée</td>
                		</tr>
                	</tbody>
                </table>

                <h3>Tableau designé avec <code>.su-table</code> + <code>.su-plus</code></h3>
                <table summary="Résumé du tableau" class="su-table su-plus su-margin-standard">
                	<caption>Légende du tableau</caption>
                	<thead>
                		<tr>
                			<th>En-tête de colonne 1</th>
                			<th>En-tête de colonne 2</th>
                		</tr>
                	</thead>
                	<tfoot>
                		<tr>
                			<th>Pied de colonne 1</th>
                			<th>Pied de colonne 2</th>
                		</tr>
                	</tfoot>
                	<tbody>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td>Celulle</td>
                			<td>Celulle</td>
                		</tr>
                		<tr>
                			<td colspan="2">Celulle fusionnée</td>
                		</tr>
                	</tbody>
                </table>

                <hr/><!--------------------------------------------------------------------------------- -->

                <h2>Citations</h2>
                <h3>Bloc <code>blockquote</code></h3>
                <blockquote cite="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</blockquote>

                <h3>Incise <code>q</code> dans <code>p</code></h3>
                <p>Lorem ipsum <q cite="#">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</q></p>

                <h3>Origine <code>cite</code> dans <code>p</code></h3>
                <p>Lorem ipsum <cite>Cite</cite></p>



                <hr/><!--------------------------------------------------------------------------------- -->

                <h2>Séparateur</h2>
                <h3>Balise <code>hr</code></h3>
                <hr/>

                <hr/><!--------------------------------------------------------------------------------- -->

                <h2>Code</h2>
                <h3>Balise <code>code</code> dans <code>p</code></h3>
                <p>Lorem ipsum <code>Code</code></p>

                <h3>Balise <code>pre</code></h3>
                <pre>Lorem ipsum</pre>

            </article>